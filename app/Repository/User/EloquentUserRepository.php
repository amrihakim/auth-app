<?php

namespace App\Repository\User;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterPostRequest;

class EloquentUserRepository implements UserRepository
{
    public function register(RegisterPostRequest $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  Crypt::encrypt($request->password);
        $user->save();
        return $user;
    }

    public function login(Request $request) {

    }

    public function forgotPassword(Request $request) {

    }
}
