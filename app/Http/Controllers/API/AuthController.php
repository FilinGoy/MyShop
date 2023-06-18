<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $authorities = request(['login', 'password']);
        if (!$token = auth()->attempt($authorities)) {
            return response()->json(['error' => 'Неверные данные для авторизации'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(StoreRequest $request)
    {
        $data = $request->validated();
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            return response()->json(['message' => 'Заполните поле пароля!']);
        }

        if (User::where('login', $data['login'])->first()) return response(['message' => 'Пользователь с таким логином уже существует!'], 403);
        if (User::where('email', $data['email'])->first()) return response(['message' => 'Пользователь с такой почтой уже существует!'], 403);


        $user = User::create($data);
        $token = auth()->tokenById($user->id);

        //Mail::to($data['email'])->send((new RegisterNotifaction($data['login']))->with('data', $data));

        return response([
            'status' => true,
            'access_token' => $token
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
