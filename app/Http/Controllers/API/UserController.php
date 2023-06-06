<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function editProfile(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer',
            'email' => 'nullable|email|unique:users,email,'. $request->id,
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'number' => 'nullable|string',
            'adress' => 'nullable|string',
            'password' => 'nullable|string',
        ]);

        $user = User::where('id', $data['id'])->first();

        dd($data);

        if (count($data) > 1 && $user) {
            if (isset($data['name'])) $user->update(['name' => $data['name']]);

            if (isset($data['email'])) {
                if ($user->email === $data['email']) unset($data['email']);
                if (DB::table('users')->where('email', $data['email'])->first()) return response()->json(
                    ['message' => 'Пользователь с такой почтой уже существует!'],
                    403
                );

                $user->update(['email' => $data['email']]);
            }
            if (isset($data['phone'])) $user->update(['number' => $data['phone']]);

            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
    }
}
