<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت درخواست مرحله اول</title>
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/bootstrap.min.css">
    {{--<link rel="stylesheet" type="text/css" href="loginRegisterResources/css/fontawesome-all.min.css">--}}
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/iofrm-theme15.css">
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
                <h3>عطر گل یاس</h3>
                <p>سامانه بسته معیشتی خانواده های حوزه<br><br>
                    مرحله اول وارد کردن اطلاعات</p>
            </div>
        </div>
        <div class="form-holder">
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
            <div class="form-content form-sm">
                <div class="form-items">
                    <h3 class="form-title">مشخصات طلبه (مرحله اول)</h3>
                    <form method="post" action="/reg1">
                        @csrf
                        <div class="form-group">
                            <label>موارد ستاره دار الزامی میباشد</label>
                            <div>
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control d-inline col-11 @error('st_name')border border-danger @enderror"  id="st_name" name="st_name" value="{{ isset($reg1) ? $reg1['st_name'] : old('st_name')}}"  placeholder="نام">
                            </div>
                            <div>
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control d-inline col-11 @error('st_family')border border-danger @enderror" value="{{ isset($reg1) ? $reg1['st_family'] : old('st_name')}}"  name="st_family" placeholder="نام خانوادگی" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline @error('code_talabegi')border border-danger @enderror" value="{{ isset($reg1) ? $reg1['code_talabegi'] : old('code_talabegi')}}"  id="code_talabegi" name="code_talabegi" placeholder="کد طلبگی">
                            </div>
                            <div class="col">
                                <span class="text-danger">*</span>
                                <input type="text" id="code_meli" class="form-control col-11 d-inline @error('code_meli')border border-danger @enderror"  value="{{ isset($reg1) ? $reg1['code_meli'] : old('code_meli')}}"  name="code_meli" placeholder=" کد ملی ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline @error('fathers_name')border border-danger @enderror" value="{{ isset($reg1) ? $reg1['fathers_name'] : old('fathers_name')}}" name="fathers_name" placeholder=" نام پدر ">
                            </div>
                            <div class="col">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline @error('st_mobile')border border-danger @enderror"  value="{{ isset($reg1) ? $reg1['st_mobile'] : old('st_mobile')}}"  name="st_mobile" placeholder=" تلفن همراه ">
                            </div>
                        </div>

                        <div class="form-group mt-4" style="text-align: right;">
                            <label> <span class="text-danger">*</span>
                                مدرسه</label>
                            <select class="form-control" name="school">
=                                @if(isset($school))
                                    @foreach($school as $s)
                                        <option value="{{$s->id}}"
                                                @if(isset($reg1))
                                                    @if($reg1['school'] == $s->id)
                                                        {{'selected'}}
                                                    @endif
                                                @endif
                                        > {{$s->school_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-button text-right">
                            <button id="submit" type="submit" class="ibtn">بعدی</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<script type="text/javascript" src="loginRegisterResources/js/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="loginRegisterResources/js/popper.min.js"></script>--}}
{{--<script type="text/javascript" src="loginRegisterResources/js/bootstrap.min.js"></script>--}}
{{--<script type="text/javascript" src="loginRegisterResources/js/main.js"></script>--}}
</body>
</html>