<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function index()
    {

        return view('auth/login');
    }
}