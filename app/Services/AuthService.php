<?php

namespace App\Services;

use App\Repositories\Interfaces\AuthRepositoryInterface;
use App\Services\Interfaces\AuthServiceInterface;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService implements AuthServiceInterface
{

    protected $authRepo;

    public function __construct(AuthRepositoryInterface $authRepo)
    {
        $this->authRepo = $authRepo;
    }

    public function register($data = [])
    {
        if ($data) {
            if ($data['register-password'] === $data['register-confirm']) {
                $data['register-password'] = Hash::make($data['register-password']);
                unset($data['register-confirm']);
                return $this->authRepo->create($data);
            }
        }

        throw new Exception('Không tạ được user');
    }

    public function login($data = []){
        $credentials = [
            'username' => $data['login-username'],
            'password' => $data['login-password'],
        ];
        return Auth::attempt($credentials);
    }
}
