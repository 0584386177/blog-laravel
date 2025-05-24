<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\Interfaces\AuthServiceInterface;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class RegisterController extends Controller
{
    protected $authService;
    public function __construct(AuthServiceInterface $authService)
    {
        $this->authService = $authService;
    }

    public function registerForm()
    {
        $template = 'auth.register';
        return view('layouts.AuthLayout', compact('template'));
    }
    public function register(RegisterRequest $req)
    {
        try {
            $credentials = $req->all();
            $user =  $this->authService->register($credentials);
            if ($user){ 
                 toastr()->success('Data has been saved successfully!'); 
                 return redirect()->route('admin.index');
            };
            throw new Exception('Không thể tạo được user');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
