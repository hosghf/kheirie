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
                <!-- <img class="logo-size" src="images/ya.png" alt=""> -->
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
                    <h3 class="form-title">تایید اطلاعات</h3>
                    <form>
                        <div class="form-group">
                            <h5 class="pb-3">مشخصات طلبه</h5>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>نام</label>
                                <p>{{ $reg1['st_name'] }}</p>
                            </div>
                            <div class="col">
                                <label>نام خانوادگی</label>
                                <p>{{ $reg1['st_family'] }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>کد ملی</label>
                                <p>{{$reg1['st_code_meli']}}</p>
                            </div>
                            <div class="col">
                                <label>کد طلبگی</label>
                                <p>{{ $reg1['st_code_talabegy'] }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>نام پدر</label>
                                <p>{{ $reg1['fathers_name'] }}</p>
                            </div>
                            <div class="col">
                                <label>مدرسه</label>
                                <p>فیضیه</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class="pb-3 pt-3">مشخصات سرپرست</h5>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>نام</label>
                                <p>عسگری</p>
                            </div>
                            <div class="col">
                                <label>نام خانوادگی</label>
                                <p>حمید</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>کد ملی</label>
                                <p>2323323</p>
                            </div>
                            <div class="col">
                                <label>نام پدر</label>
                                <p>کریم</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>تعداد افراد تحت تکفل</label>
                                <p>3</p>
                            </div>
                            <div class="col">
                                <label>شغل</label>
                                <p>کارمند</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label>توضیحات</label>
                                <p>شسما شمنتاب شستابمشب سماشسنا سنمتاب شسنمبا شسمنا نسشبمن</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label>میزان درآمد</label>
                                <p>بین یک تا 2 ملیون</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label> آدرس </label>
                                <p>خیابان تاج کوچه 4 پلاک 12</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label> کد پستی </label>
                                <p>12345-78908</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> تلفن ثابت  </label>
                                <p>12345-78908</p>
                            </div>
                            <div class="col">
                                <label> تلفن همراه </label>
                                <p>12345-78908</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> آدرس محل کار </label>
                                <p>شنمب مسسات بساتمسنتاب سناسینمتبا سشبتن </p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> تلفن محل کار </label>
                                <p>8787687686 </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class="pt-3">مشخصات افراد تحت تکفل</h5>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> 1-</label>
                                <label> برادر </label> <label> - </label>
                                <label> علیرضا </label><label> - </label>
                                <label> میرمحمودی </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>2-</label>
                                <label> برادر </label> <label> - </label>
                                <label> محمد رضا </label><label> - </label>
                                <label> میرمحمودی </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>2-</label>
                                <label> پدر بزرگ </label> <label> - </label>
                                <label> عبد الحسن </label><label> - </label>
                                <label> عباسچی راد </label>
                            </div>
                        </div>
                        <div class="form-button text-right">
                            <button id="submit" type="button" class="ibtn">ثبت نام</button>
                            <a type="button" href="/backReg4" class="btn btn-light">قبلی</a>
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