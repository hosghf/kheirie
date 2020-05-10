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
                             تایید شد و مبلغ
                            <span class="text-bold"> {{number_format($amount)}} </span>
                              تومان به حساب ایشان واریز میشود و همین مبلغ از حساب موسسه کم میشود.
                            </p>
                    </div>
                    <div class="card-footer">
                        <a href="/admin/demand/list" class="btn btn-primary col-sm-12 col-md-3">بازگشت به درخواست</a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection