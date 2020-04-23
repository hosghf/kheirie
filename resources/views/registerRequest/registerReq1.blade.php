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
                    مرحله اول وارد کردن اطلاعات</p>
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content form-sm">
                <div class="form-items">
                    <h3 class="form-title">مشخصات طلبه (مرحله اول)</h3>
                    <form>
                        <div class="form-group">
                            <label>موارد ستاره دار الزامی میباشد</label>
                            <div>
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control d-inline col-11" name="name" placeholder="نام" required>
                            </div>
                            <div>
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control d-inline col-11" name="st_family" placeholder="نام خانوادگی" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline" placeholder="کد طلبگی">
                            </div>
                            <div class="col">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline" placeholder=" کد ملی ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline" placeholder=" نام پدر ">
                            </div>
                            <div class="col">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline" placeholder=" تلفن همراه ">
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label>مدرسه</label>
                            <div class="custom-options">
                                <input type="radio" id="rad1" name="rad"><label for="rad1"> الزهرا </label>
                                <input type="radio" id="rad2" name="rad"><label for="rad2"> خاتون </label>
                                <input type="radio" id="rad3" name="rad"><label for="rad3">رقیه</label>
                            </div>
                        </div> -->
                        <div class="form-group mt-4" style="text-align: right;">
                            <label> <span class="text-danger">*</span>
                                مدرسه</label>
                            <select class="form-control" style="direction: rtl;">
                                <option>فثضل</option>
                                <option>احمد</option>
                            </select>
                        </div>
                        <div class="form-button text-right">
                            <button id="submit" type="submit" class="ibtn">بعدی</button>
                            <button type="button" class="btn btn-light">قبلی</button>
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