<?php

namespace App\Services\Interfaces;

interface AuthServiceInterface {

    public function register($data = []);
    public function login($data = []);
}