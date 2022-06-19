<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;

class UserService extends ApiService
{

    protected string $endpoint;

    public function __construct()
    {
        $this->endpoint = env("USER_SERVICE");
    }

    public function post($path, $data)
    {
        return Http::post($this->endpoint . "/" . $path, $data)->body();
    }

    public function get($path, $data)
    {
        return Http::get($this->endpoint . "/" . $path, $data)->json();
    }

    public function put($path, $data)
    {
        return Http::put($this->endpoint . "/" . $path, $data)->json();
    }


    public function register(array $data)
    {
        return $this->post("users/register", $data);
    }

    public function login(array $data)
    {
        return $this->post("users/login", $data);
    }
}
