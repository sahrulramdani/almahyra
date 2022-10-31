<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $listUser = $this->userModel->listUser();

        $data = [
            'listUser' => $listUser
        ];

        return view('dashboard/user', $data);
    }
}