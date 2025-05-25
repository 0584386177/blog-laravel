<?php

namespace App\Http\Controllers\Auth;

use App\Enum\UserStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\SendActivationMail;
use App\Models\User;
use App\Services\Interfaces\AuthServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpOption\None;
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
            if ($user) {
                flash()->success('Đã đăng ký thành công. Vui lòng check mail để kích hoạt tài khoản.');
                return redirect()->route('admin.index');
            };
            throw new Exception('Không thể tạo được user');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    // Cần desgin repository
    public function activation($token)
    {
        $user = User::where('active_token', $token)->first();
        if ($user) {
            $user->status = UserStatus::Active;
            $user->active_token = '';
            $user->save();
            flash()->success('Kích hoạt tài khoản thành công.');
            return redirect()->route('auth.login');
        }
        flash()->error('Kích hoạt tài khoản thất bại');
        return back();
    }
}
