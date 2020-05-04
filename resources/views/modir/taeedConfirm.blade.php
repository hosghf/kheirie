@extends('../../dashbordLayout')

@section('title', ' تاییدیه')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card card-info col">
                    <div class="card-header">
                        <h3 class="card-title"> تاییدیه </h3>
                    </div>
                    <div class="card-body">
                        <p>درخواست شماره
                            <span class="text-bold">{{ $demandId }}</span>
                            مربوط به طلبه
                            <span class="text-bold">{{ $student->name }} {{ $student->family }}</span>
                            با کد طلبگی
                            <span class="text-bold">{{ $student->code_talabegi }}</span>
                             تایید شد و برای مدیریت ارسال شد.
                            </p>
                    </div>
                    <div class="card-footer">
                         <a href="/modir/darkhastList" class="btn btn-primary col-sm-12 col-md-3">بازگشته به درخواست ها</a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection