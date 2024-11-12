<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class AuthController extends ResourceController
{
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $loginModel = new \App\Models\LoginModel();
        $loginSukses = $loginModel->getData($username, $password);

        if ($loginModel) {
            return $this->respond([
                'status' => 'success',
                'message' => 'Login successful',
                'data' => $loginSukses
            ]);
        } else {
            return $this->respond([
                'status' => 'error',
                'message' => 'Invalid username or password'
            ]);
        }
    }
}
