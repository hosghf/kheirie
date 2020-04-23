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
                    <h3 class="form-title"> مشخصات سرپرست خانواده (مرحله دوم) </h3>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control d-inline col-11" placeholder=" نام ">
                            </div>
                            <div class="col">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline" placeholder=" نام خانوادگی ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline" placeholder=" کد ملی ">
                            </div>
                        </div>

                        <div class="form-group mt-3" style="text-align: right;">
                            <span class="text-danger">*</span>
                            <label>نسبت با طلبه</label>
                            <select class="form-control" style="direction: rtl;">
                                <option>فثضل</option>
                                <option>احمد</option>
                            </select>
                        </div>
                        <div class="form-row pt-3">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline" placeholder=" شغل سرپرست ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>توضیحات</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-3" style="text-align: right;">
                            <span class="text-danger">*</span>
                            <label> میزان درآمد ماهیانه </label>
                            <select class="form-control" style="direction: rtl;">
                                <option>فثضل</option>
                                <option>احمد</option>
                            </select>
                        </div>

                        <h3 class="mt-5">مشخصات افراد تحت تکفل</h3>
                        <div class="form-row mb-5 p-2 border border-gray rounded">
                            <div class="mb-2 mt-2">
                                <label> 2- </label>
                                <label> عبد الحسن </label><label> - </label>
                                <label> عباسچی راد </label> <label> - </label>
                                <label> پدر بزرگ </label>
                                <button type="button" class="btn btn-danger">حذف</button>
                            </div>
                            <div class="mb-2 mt-2">
                                <label> 2- </label>
                                <label> عبد الحسن </label><label> - </label>
                                <label> عباسچی راد </label> <label> - </label>
                                <label> پدر بزرگ </label>
                                <button type="button" class="btn btn-danger">حذف</button>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder=" نام ">
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder=" نام خانوادگی ">
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder=" نسبت ">
                            </div>
                            <button type="button" class="btn btn-success">ذخیره</button>

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