<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    protected $allowedFields = ['name', 'email'];
    protected $validationRules = [
        'name'  => 'required|min_length[3]|max_length[255]',
        'email' => 'required|valid_email'
    ];
    protected $validationMessages = [
        'name'  => [
            'required' => 'Name is required',
            'min_length' => 'Name must be at least 3 characters long'
        ],
        'email' => [
            'required' => 'Email is required',
            'valid_email' => 'Email must be a valid email address'
        ]
    ];
    protected $skipValidation = false; // Enable validation
}
