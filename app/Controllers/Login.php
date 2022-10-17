<?php

namespace App\Controllers;

class Login extends BaseController

{
    public function login()
    {
        $data = [
            'title'  => 'login',
            'config' => config('Auth'),
        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title'  => 'register',
            'config' => config('Auth'),
        ];
        return view('auth/register', $data);
    }
}
