<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\Interfaces\AuthServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $authService;
    public function __construct(AuthServiceInterface $authService)
    {
        $this->authService = $authService;
    }
    public function loginForm()
    {
        
        $template = 'auth.login';
        return view('layouts.AuthLayout', compact('template'));
    }
    public function login(LoginRequest $req)
    {
        $data = $req->only(['login-username', 'login-password']);
        try {
            if ($this->authService->login($data)) {
                $req->session()->regenerate();
                flash()->success("Đăng nhập thành công");
                return redirect()->route('admin.index');
            }
            flash()->error("Tài khoản hoặc mật khẩu không đúng.Vui lòng nhập lại.");
            return back();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
