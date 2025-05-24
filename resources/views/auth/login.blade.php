<div class="card mb-0">
    <div class="card-body">
        <div class="login-title text-center">
            <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
        </div>
        <form class="auth-login-form mt-2" action="{{route("auth.login")}}" method="POST" novalidate="novalidate">
            @csrf
            <div class="mb-1">
                <label for="login-username" class="form-label">Username</label>
                <input type="text" class="form-control @error('login-username') is-invalid @enderror"
                    id="login-username" name="login-username" placeholder="johndoe">
            </div>
            @error('login-username')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-1">
                <label for="login-password" class="form-label">Mật khẩu</label>

                <div class="input-group input-group-merge form-password-toggle">
                    <input type="password"
                        class="form-control @error('login-password') is-invalid @enderror  form-control-merge"
                        id="login-password" name="login-password" placeholder="············"
                        aria-describedby="login-password" tabindex="3">
                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></span>
                </div>
                @error('login-password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary w-100 waves-effect waves-float waves-light" tabindex="5">ĐĂNG NHẬP</button>
        </form>
    </div>
</div>