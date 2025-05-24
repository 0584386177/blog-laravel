<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface{
    

    public function create($data =[]){
        return User::create([
            'email' => $data['register-email'],
            'username' => $data['register-username'],
            'password' => $data['register-password'],
        ]);
    }
  
}