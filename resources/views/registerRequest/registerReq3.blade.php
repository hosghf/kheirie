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
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
            <div class="form-content form-sm">
                <div class="form-items">
                    <h3 class="mb-5">مشخصات افراد تحت تکفل(مرحله سوم)</h3>
                    <form method="post" action="/reg3">
                        @csrf
                        <div id='takafol' class="form-row mb-5 p-2 border border-gray rounded">
                            {{--<div class="mb-2 mt-2">--}}
                                {{--<label> 2- </label>--}}
                                {{--<label> عبد الحسن </label><label> - </label>--}}
                                {{--<label> عباسچی راد </label> <label> - </label>--}}
                                {{--<label> پدر بزرگ </label>--}}
                                {{--<label id="j"> </label>--}}
                                {{--<button type="button" class="btn btn-danger">حذف</button>--}}
                            {{--</div>--}}

                            <div class="col-sm-9">
                                <input id="Tname" type="text" class="form-control" placeholder=" نام ">
                            </div>
                            <div class="col-sm-9">
                                <input id="Tfamily" type="text" class="form-control" placeholder=" نام خانوادگی ">
                            </div>
                            <div class="col-sm-9">
                                <input id="Trel" type="text" class="form-control" placeholder=" نسبت ">
                            </div>
                            <button id="save" type="button" class="btn btn-success">ذخیره</button>

                        </div>

                        <div id='takafolShow' class="form-row mb-5 p-2 border border-gray rounded">
                            <input class="d-none" id="last_id" name="last_id" value="{{isset($last_id) ? $last_id : 0}}">
                            @if(!empty($takafols))
                                @foreach($takafols as $tak => $val)
                                    <div  class= "{{ $val[3] }} takafols mb-2 mt-2 col-12"> {{-- get class name --}}
                                        <label>{{$val[0]}}</label><label> - </label>
                                        <label>{{$val[1]}}</label> <label> - </label>
                                        <label>{{$val[2]}}</label>
                                        <button type="button" onclick="t1(this)" class="btn btn-danger delete pull-left"> حذف </button>
                                    </div>

                                    <input type='text' class='{{ $val[3] }} takafols d-none' name='{{ $tak }}[] '  value='{{$val[0]}}'>
                                    <input type='text' class=' {{ $val[3] }} takafols d-none' name='{{ $tak }}[] '  value='{{$val[1]}}'>
                                    <input type='text' class=' {{ $val[3] }} takafols d-none' name='{{ $tak }}[] '  value='{{$val[2]}}'>
                                    <input type='text' class=' {{ $val[3] }} takafols d-none' name='{{ $tak }}[] '  value='{{$val[3]}}'>

                                @endforeach
                            @endif
                        </div>
                        <div class="form-button text-right">
                            <button id="submit" type="submit" class="ibtn">بعدی</button>
                            <a type="button" href="/backReg2" class="btn btn-light">قبلی</a>
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
<script type="text/javascript" src="loginRegisterResources/js/page2jq.js"></script>
</body>
</html>