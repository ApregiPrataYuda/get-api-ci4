<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;
class Users extends ResourceController
{
    protected $UserModel;
    public function __construct() {
        $this->UserModel = new UserModel();
    }

    
    public function index()
    {
        $users = $this->UserModel->findAll();
        return $this->respond($users);
    }


    public function show($id = null)
    {
        $user = $this->UserModel->find($id);
        if ($user) {
            return $this->respond($user);
        } else {
            return $this->failNotFound('User not found');
        }
    }
}
