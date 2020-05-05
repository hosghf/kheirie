
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/iofrm-theme3.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/farsi_fonts.css">
</head>
<body>
<div class="form-body" class="container-fluid">
    {{--<div class="website-logo">--}}
        {{--<a href="index.html">--}}
            {{--<div class="logo">--}}
                {{--<img class="logo-size" src="" alt="">--}}
            {{--</div>--}}
        {{--</a>--}}
    {{--</div>--}}
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">

            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                @if (session()->has('error'))
                    <li class="alert alert-danger">{{ session('error') }}</li>
                @endif
                <div class="form-items">
                    <h3>سامانه ثبت نام کمک های معیشیتی مدارس حوزه علمیه خواهران شیراز</h3>
                    <p class="mt-4"> جهت ثبت درخواست در سیستم بر روی ثبت درخواست کلیک کنید </p>
                    <div class="page-links">
                        <a href="login" class="active ml-3">ورود</a><a href="reg1">ثبت درخواست</a>
                    </div>
                    <form method="post" action="/login">
                        @csrf
                        <input class="form-control" type="text" name="username" placeholder=" نام کاربری " required>
                        <input class="form-control" type="password" name="password" placeholder="کلمه عبور" required>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">ورود</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="loginRegisterResources/js/jquery.min.js"></script>
<script type="text/javascript" src="loginRegisterResources/js/popper.min.js"></script>
<script type="text/javascript" src="loginRegisterResources/js/bootstrap.min.js"></script>
<script type="text/javascript" src="loginRegisterResources/js/main.js"></script>
</body>
</html>