<?php

namespace App\Repositories;

use App\Mail\SendActivationMail;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthRepository implements AuthRepositoryInterface
{


    public function create($data = [])
    {
        $role = Role::where('name', 'admin')->value('id'); // defautlt admin
        $user = User::create([
            'fullname' => $data['register-fullname'],
            'email' => $data['register-email'],
            'username' => $data['register-username'],
            'password' => $data['register-password'],
            'active_token' => Str::random(64),
            'role_id' => $role,
        ]);
        Mail::to($user->email)->send(new SendActivationMail($user, $user->active_token));

        return $user;
    }
}
