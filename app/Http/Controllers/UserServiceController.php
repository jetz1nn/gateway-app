<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserServiceController extends Controller
{

    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(RegisterUserRequest $request)
    {
        return $this->userService->register($request->all());
    }

    public function login(LoginRequest $request)
    {
        return $this->userService->login($request->all());
    }

    public function index() {
        return $this->userService->list();
    }
}
