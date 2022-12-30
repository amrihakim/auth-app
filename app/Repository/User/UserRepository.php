<?php

namespace App\Repository\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterPostRequest;


interface UserRepository {
    public function login(Request $request);
    public function register(RegisterPostRequest $request);
    public function forgotPassword(Request $request);
}
