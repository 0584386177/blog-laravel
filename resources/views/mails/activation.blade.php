<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kích hoạt tài khoản</title>
</head>
<body>
    <h1>Xin chào {{$user->fullname}}</h1>
    <p>Cảm ơn bạn đã đăng ký tài khoản bên chúng tôi. Vui lòng nhập liên kết dưới để kích hoạt tài khoản.</p>
    <a href="{{route('active.email',$token)}}" style="padding:10px 5px; background-color:black; color:white;">Kích hoạt tài khoản</a>
</body>
</html>