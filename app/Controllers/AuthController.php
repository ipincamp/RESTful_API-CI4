<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class AuthController extends ResourceController
{
    protected $request;

    public function __construct()
    {
        $this->request = service('request');
    }

    public function testAPI()
    {
        return $this->respond([
            'status' => 'success',
            'message' => 'Test API'
        ]);
    }

    public function login()
    {
        $inputs = $this->request->getJSON();
        if ($inputs == null) {
            return $this->respond([
                'status' => 'error',
                'message' => 'No data provided'
            ]);
        }

        $loginModel = new \App\Models\AuthModel();
        $user = $loginModel->loginByUsername($inputs->username);
        if (!$user || !password_verify($inputs->password, $user['password'])) {
            return $this->respond([
                'status' => 'error',
                'message' => 'Invalid username or password'
            ]);
        }

        unset($user['password']);

        return $this->respond([
            'status' => 'success',
            'message' => 'Login successful',
            'data' => $user
        ]);
    }
}
