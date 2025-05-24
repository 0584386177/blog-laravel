<div class="card mb-0">
    <div class="card-body">
        <div class="register-title text-center">
            <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
        </div>
        <form class="auth-register-form mt-2" action="{{route("auth.register")}}" method="POST" novalidate="novalidate">
            @csrf
            <div class="mb-1">
                <label for="register-username" class="form-label">Username</label>
                <input type="text" class="form-control @error('register-username') is-invalid @enderror"
                    id="register-username" name="register-username" placeholder="johndoe">
            </div>
            @error('register-username')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-1">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" @error('register-email') is-invalid @enderror
                    name="register-email" placeholder="john@example.com">
                @error('register-email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-1">
                <label for="register-password" class="form-label">Mật khẩu</label>

                <div class="input-group input-group-merge form-password-toggle">
                    <input type="password"
                        class="form-control @error('register-password') is-invalid @enderror  form-control-merge"
                        id="register-password" name="register-password" placeholder="············"
                        aria-describedby="register-password" tabindex="3">
                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></span>
                </div>
                @error('register-password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="register-password" class="form-label">Xác nhận mật khẩu</label>

                <div class="input-group input-group-merge form-password-toggle">
                    <input type="password" class="form-control  form-control-merge" id="register-confirm"
                        name="register-confirm" placeholder="············">
                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></span>
                </div>

            </div>
            <button class="btn btn-primary w-100 waves-effect waves-float waves-light" tabindex="5">ĐĂNG KÝ</button>
        </form>

        <p class="text-center mt-2">
            <span>Already have an account?</span>
            <a href="page-auth-login-v1.html">
                <span>Sign in instead</span>
            </a>
        </p>




    </div>
</div>