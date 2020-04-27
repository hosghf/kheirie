<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/iofrm-theme15.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/farsi_fonts.css">

</head>
<body>
<div class="form-body" class="container-fluid">
    <div class="website-logo">
        <a href="index.html">
            <div class="logo">
                <img class="logo-size" src="" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <h3>عطر گل یاس</h3>
                <p>سامانه بسته معیشتی خانواده های حوزه<br><br>
                    مرحله چهارم اطلاعات تماس</p>
            </div>
        </div>
        <div class="form-holder">
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
            <div class="form-content form-sm">
                <div class="form-items">
                    <h3 class="form-title">اطلاعات تماس(مرحله چهارم)</h3>
                    <form method="post" action="/reg4">
                        @csrf
                        <div class="form-group">
                            <!--<label>مشخصات فردی</label>-->
                            <input type="text" class="form-control" name="address" placeholder="آدرس منزل">
                            <input type="text" class="form-control" name="postal_code" placeholder=" کد پستی ">
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="state_phone" placeholder=" تلفن ثابت سرپرست ">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="prov_mobil" placeholder=" همراه سرپرست ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="prov_work_address" placeholder=" آدرس محل کار ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <input type="text" class="form-control" name="work_phone" placeholder=" تلفن محل کار ">
                            </div>
                        </div>
                        <div class="form-button text-right">
                            <button id="submit" type="submit" class="ibtn">بعدی</button>
                            <a type="button" href="backReg3" class="btn btn-light">قبلی</a>
                            <a type="button" href="/confirm" class="btn btn-light">ذخیره</a>
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