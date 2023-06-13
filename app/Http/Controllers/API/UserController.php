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
            'address' => 'nullable|string',
            'password' => 'nullable|string',
        ], [
            'email.required' => 'Поле является обязательным!',
            'email.unique' => 'Данный Email адрес уже используется!',
            'email' => 'Поле почты заполнено неверно!',
            'login.required' => 'Поле является обязательным!',
            'login.unique' => 'Данный логин уже используется!',
            'login.min' => 'Данный логин содержит менее 4 символов!',
            'login' => 'Поле логина заполнено неверно!',
            'password.required' => 'Поле является обязательным!',
            'password.confirmed' => 'Пароли не совпадают!',
        ]);

        $user = User::where('id', $data['id'])->first();

        if (count($data) > 1 && $user) {
            if (isset($data['email'])) {
                if ($user->email === $data['email']) unset($data['email']);

                $user->update(['email' => $data['email']]);
            }

            if (isset($data['first_name'])) $user->update(['first_name' => $data['first_name']]);
            if (isset($data['last_name'])) $user->update(['last_name' => $data['last_name']]);
            if (isset($data['number'])) $user->update(['number' => $data['number']]);
            if (isset($data['address'])) $user->update(['address' => $data['address']]);
            if (isset($data['newPassword'])) $user->update(['newPassword' => $data['newPassword']]);

            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
    }
}
