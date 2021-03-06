
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
    <link rel="icon" href="/loginRegisterResources/images/logo3.png"/>
</head>
<body>
<div class="form-body" class="container-fluid">
    <div class="row">
        <div class="website-logo">
            <a href="">
                <div class="logo">
                    <img class="logo-size"  src="loginRegisterResources/images/logo.png" alt="">
                </div>
            </a>
        </div>
        <div class="img-holder">
            <div class=""></div>
            <div class="info-holder">
                <h3>عطر گل یاس</h3>
                <p>سامانه بسته معیشتی خانواده های حوزه<br><br>
                    مرحله اول وارد کردن اطلاعات</p>
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                @if (session()->has('error'))
                    <li class="alert alert-danger">{{ session('error') }}</li>
                @endif
                <div class="form-items text-right">
                    <h3>واریز کمک های نقدی به حوزه علمیه خواهران شیراز</h3>
                    <div class="page-links">
                        <a href="login" class="active ml-3">صفحه اصلی</a>
                    </div>
                    <form method="post" action="/zarinpal/request">
                        @csrf
                        <div class="form-group mb-1">
                            <label> نام </label>
                            <input class="form-control" type="text" name="name" placeholder="اختیاری " >
                        </div>
                        <div class="form-group mb-1">
                            <label> خانوادگی </label>
                            <input class="form-control" type="text" name="family" placeholder="اختیاری " >
                        </div>
                        <div class="form-group mb-1">
                            <label class="text-danger">*</label>
                            <label> نوع کمک </label>
                            <select class="form-control" name="daste">
                                @foreach($daste as $d)
                                    <option value="{{$d->id}}"> {{ $d->title }}  </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12">
                                <label> توضیحات </label>
                                <textarea name="tozihat" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-1">
                            <label class="text-danger">*</label>
                            <label>مبلغ</label>
                            <input class="form-control" type="text" name="amount" placeholder=" به تومان " >
                        </div>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">پرداخت</button>
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