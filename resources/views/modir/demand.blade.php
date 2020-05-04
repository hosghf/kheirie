@extends('../../dashbordLayout')

@section('title', 'درخواست')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="invoice p-3 mb-3 col-12">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                درخواست شماره
                                @if(isset($demand))
                                    <span> {{ $demand->shomare }}</span>
                                   @if($demand->status_code == 2) <small class="badge badge-success"> تایید شده</small> @endif
                                <small class="float-left">تاریخ:
                                    <span> {{ $demand->tarikh }}</span> @endif
                                </small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-col mt-5">
                        <h5>اطلاعت طلبه</h5>
                    </div>
                    <div class="row invoice-info mt-3">
                        <div class="row invoice-col col-12 mb-3 pr-4">
                            <div class="col-md-4 col-sm-6 mt-4"> <span class="text-bold"> نام </span>: {{ $student->name }} </div>
                            <div class="col-md-4 col-sm-6 mt-4"> <span class="text-bold"> نام خانوادگی </span>: {{ $student->family }} </div>
                            <p class="col-md-4 col-sm-6  mt-4"><span class="text-bold"> نام پدر</span>: {{ $student->father_name }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"><span class="text-bold"> کد طلبگی </span> : {{ $student->code_talabegi }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"><span class="text-bold"> کد ملی </span> : {{ $student->code_meli }}</p>
                            <p class="col-md-4 col-sm-6  mt-4 translate"> <span class="text-bold"> همراه طلبه </span>: {{ Verta::persianNumbers($student->mobile ) }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"> <span class="text-bold"> مدرسه </span> :{{ $student->school->school_name }}</p>
                        </div>
                        <div class="row invoice-col mt-5">
                            <h5>اطلاعت سرپرست</h5>
                        </div>
                        <div class="row invoice-col col-12 mt-2 pr-4">
                            <div class="col-md-4 col-sm-6 mt-4"> <span class="text-bold"> نام سرپرست </span> : {{ $provider->name }} </div>
                            <div class="col-md-4 col-sm-6 mt-4"> <span class="text-bold"> نام خانوادگی سرپرست</span> : {{ $provider->family }}</div>
                            <p class="col-md-4 col-sm-6  mt-4"><span class="text-bold"> کد ملی سرپرست </span> : {{ $provider->code_meli }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"><span class="text-bold"> نسبت با طلبه </span> : {{ $provider->relation }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"><span class="text-bold"> شغل سرپرست </span> : {{ $provider->job }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"> <span class="text-bold"> توضیحات </span> : {{ $provider->explanation }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"> <span class="text-bold"> درآمد ماهیانه </span> : {{ $provider->salary }}</p>
                        </div>
                        <div class="row invoice-col mt-5">
                            <h5>اطلاعت تماس</h5>
                        </div>
                        <div class="row invoice-col col-12 mt-2 pr-4">
                            <div class="col-md-8 col-sm-6 mt-4"> <span class="text-bold"> آدرس منزل </span>: {{ $provider->address }} </div>
                            <div class="col-md-4 col-sm-6 mt-4"> <span class="text-bold"> کد پستی منزل </span>: {{ $provider->postal_code }}</div>
                            <p class="col-md-4 col-sm-6  mt-4"><span class="text-bold"> تلفن منزل </span>: {{ $provider->phone }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"><span class="text-bold">همراه سرپرست </span> : {{ $provider->mobile }}</p>
                            <p class="col-md-8 col-sm-6  mt-4"><span class="text-bold">آدرس محل کار سرپرست </span> : {{ $provider->work_address }}</p>
                            <p class="col-md-4 col-sm-6  mt-4"> <span class="text-bold"> تلفن محل کار سرپرست </span>: {{ $provider->work_phone }}</p>
                        </div>
                        <div class="row invoice-col mt-5">
                            <h5> افراد تحت تکفل </h5>
                        </div>
                        <div class="row invoice-col col-12 mt-2 pr-4">
                            <div class="row col-12 mb-2">
                                <p class="col-2 text-bold">نام</p>
                                <p class="col-2 text-bold">نام خانوادگی</p>
                                <p class="col-2 text-bold">نسبت</p>
                            </div>
                            @foreach($dependents as $d)
                                <div class="row col-12">
                                    <p class="col-2">{{$d->name}}</p>
                                    <p class="col-2"> {{$d->family}}</p>
                                    <p class="col-2">{{$d->relation}}</p>
                                </div>
                            @endforeach
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    @if($demand->status_code != 2)
                    <div class="row no-print mt-3">
                        <div class="col-12">
                            <a type="button" href="/modir/darkhast/{{isset($demand) ? $demand->id : ''}}/taeed" class="btn btn-success float-left"> تایید درخواست
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection