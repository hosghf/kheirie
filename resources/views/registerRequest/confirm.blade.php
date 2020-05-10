<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تایید</title>
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
                                <p>{{ $reg1['st_name'] ?? '' }}</p>
                            </div>
                            <div class="col">
                                <label>نام خانوادگی</label>
                                <p>{{ $reg1['st_family'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>کد ملی</label>
                                <p>{{$reg1['code_meli'] ?? '' }}</p>
                            </div>
                            <div class="col">
                                <label>کد طلبگی</label>
                                <p>{{ $reg1['code_talabegi'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>نام پدر</label>
                                <p>{{ $reg1['fathers_name'] ?? '' }}</p>
                            </div>
                            <div class="col">
                                <label>مدرسه</label>
                                <p>@if(isset($reg1))
                                        @foreach($school as $s)
                                            @if($s->id == $reg1['school'])
                                                {{ $s->school_name }}
                                                @break
                                            @endif
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> شماره همراه طلبه </label>
                                <p>{{ $reg1['st_mobile'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class="pb-3 pt-3">مشخصات سرپرست</h5>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>نام سرپرست</label>
                                <p>{{ $reg2['prov_name'] ?? '' }}</p>
                            </div>
                            <div class="col">
                                <label>نام خانوادگی</label>
                                <p>{{ $reg2['prov_family'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> نسبت با طلبه </label>
                                <p>@if(isset($reg2))
                                        @foreach($relation as $rel)
                                                @if($rel->id == $reg2['relation_to_st'])
                                                    {{ $rel->title }}
                                                    @break
                                                @endif
                                        @endforeach
                                   @endif
                                </p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>کد ملی</label>
                                <p>{{ $reg2['prov_code_meli'] ?? '' }}</p>
                            </div>
                            <div class="col">
                                <label> شغل سرپرست</label>
                                <p>{{ $reg2['prov_job'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>توضیحات شغل</label>
                                <p>{{ $reg2['prov_job_explain'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> شماره حساب سرپرست </label>
                                <p>{{ $reg2['shomarehesab'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label>میزان درآمد</label>
                                <p>@if(isset($reg2))
                                        @foreach($salary as $sal)
                                            @if($sal->id == $reg2['prov_salary'])
                                                {{ $sal->title }}
                                                @break
                                            @endif
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <h5 class="pb-3"> اطلاعات تماس </h5>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label> آدرس </label>
                                <p>{{ $reg4['address'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label> کد پستی </label>
                                <p>{{ $reg4['postal_code'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> تلفن ثابت  </label>
                                <p>{{ $reg4['state_phone'] ?? '' }}</p>
                            </div>
                            <div class="col">
                                <label> تلفن همراه </label>
                                <p>{{ $reg4['prov_mobil'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> آدرس محل کار </label>
                                <p>{{ $reg4['prov_work_address'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label> تلفن محل کار </label>
                                <p>{{ $reg4['work_phone'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class="pt-3">مشخصات افراد تحت تکفل</h5>
                        </div>
                        @if(!empty($takafols))
                            <div class="d-none">{{ $i = 1 }}</div>
                            @foreach($takafols as $t)
                            <div class="form-row">
                                <div class="col">
                                    <label> {{ $i++ }} -</label>
                                    <label> {{ $t[0] }} </label> <label> - </label>
                                    <label class="pl-2 pr-2"> {{ $t[1] }} </label><label> - </label>
                                    <label> {{ $t[2] }} </label>
                                </div>
                            </div>
                                <hr>
                            @endforeach
                        @endif
                        <div class="form-button text-right">
                            <a id="submit" href="/storeReg" type="button" class="ibtn">ثبت نام</a>
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