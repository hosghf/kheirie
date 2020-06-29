<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت درخواست مرحله دوم</title>
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/iofrm-theme15.css">
    <link rel="stylesheet" type="text/css" href="loginRegisterResources/css/farsi_fonts.css">

</head>
<body>
<div class="form-body" class="container-fluid">
    <div class="website-logo">
        <a href="">
            <div class="logo">
                <img class="logo-size"  src="loginRegisterResources/images/logo.png" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <h3> {{$texts[1]['text']}} </h3>
                <p style="line-height: normal"> {{$texts[2]['text']}} </p>
            </div>
        </div>
        <div class="form-holder">
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
            <div class="form-content form-sm">
                <div class="form-items">
                    <h3 class="form-title"> مشخصات سرپرست خانواده (مرحله دوم) </h3>
                    <form method="post" action="/reg2">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control d-inline col-11 @error('prov_name')border border-danger @enderror" value="{{ isset($reg2) ? $reg2['prov_name'] : old('prov_name')}}" name="prov_name"  placeholder=" نام ">
                            </div>
                            <div class="col">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline @error('prov_family')border border-danger @enderror" value="{{ isset($reg2) ? $reg2['prov_family'] : old('prov_family')}}" name="prov_family" placeholder=" نام خانوادگی ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline @error('prov_code_meli')border border-danger @enderror" value="{{ isset($reg2) ? $reg2['prov_code_meli'] : old('prov_code_meli')}}" name="prov_code_meli" placeholder=" کد ملی ">
                            </div>
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline @error('shomarehesab')border border-danger @enderror" value="{{ isset($reg2) ? $reg2['shomarehesab'] : old('shomarehesab')}}" name="shomarehesab" placeholder=" شماره حساب ">
                            </div>
                        </div>

                        <div class="form-group mt-3" style="text-align: right;">
                            <span class="text-danger">*</span>
                            <label>نسبت با طلبه</label>
                            <select class="form-control" name="relation_to_st" style="direction: rtl;">
                                @if(isset($relations))
                                    @foreach($relations as $rel)
                                        <option value="{{$rel->id}}"
                                        @if(isset($reg2))
                                            @if($reg2['relation_to_st'] == $rel->id)
                                                {{'selected'}}
                                            @endif
                                        @endif
                                        >{{ $rel->title }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-row pt-3">
                            <div class="col-sm-6">
                                <span class="text-danger">*</span>
                                <input type="text" class="form-control col-11 d-inline @error('prov_job')border border-danger @enderror" value="{{ isset($reg2) ? $reg2['prov_job'] : old('prov_job')}}" name="prov_job" placeholder=" شغل سرپرست ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>توضیحات</label>
                            <textarea class="form-control" value="{{ isset($reg2) ? $reg2['prov_job_explain'] : old('prov_job_explain')}}"  name="prov_job_explain"></textarea>
                        </div>
                        <div class="form-group mt-3" style="text-align: right;">
                            <span class="text-danger ">*</span>
                            <label> میزان درآمد ماهیانه </label>
                            <select class="form-control" name="prov_salary" style="direction: rtl;">
                                @if(isset($salaries))
                                    @foreach($salaries as $sal)
                                       <option value="{{$sal->id}}"
                                           @if(isset($reg2))
                                               @if($reg2['prov_salary'] == $sal->id)
                                                   {{'selected'}}
                                               @endif
                                           @endif
                                               >{{$sal->title}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-button text-right">
                            <button id="submit" type="submit" class="ibtn">بعدی</button>
                            <a type="button" href="/backReg1" class="btn btn-light">قبلی</a>
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