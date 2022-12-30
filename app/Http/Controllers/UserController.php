<?php

namespace App\Http\Controllers;

use App\Utils\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterPostRequest;
use App\Repository\User\EloquentUserRepository;

class UserController extends Controller
{

    use Response;
    protected $eloquentUser;

    public function __construct(EloquentUserRepository $eloquentUser) {
        $this->eloquentUser = $eloquentUser;
    }

    public function register(RegisterPostRequest $request) {
        $validated = $request->validated();
        if ($validated->fails()) {
            return $this->responseValidation($validated->errors());
         }
         $user = $this->eloquentUser->register($request);
         if (!empty($user)){
            return $this->responseData($task, "Data berhasil ditambahkan");
         }
         return $this->responseError();
    }

    public function login(Request $request) {

    }
}
