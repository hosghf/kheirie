@extends('../../dashbordLayout')

@section('title', ' تایید و پرداخت ')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card card-info col">
                    <div class="card-header">
                        <h3 class="card-title"> تایید و پرداخت </h3>
                    </div>
                    <div class="card-body">
                        <p>درخواست شماره
                            <span class="text-bold">{{ $demandId }}</span>
                            مربوط به طلبه
                            <span class="text-bold">{{ $student->name }} {{ $student->family }}</span>
                            با کد طلبگی
                            <span class="text-bold">{{ $student->code_talabegi }}</span>
                            مورد تایید است و مبلغ زیر به حساب ایشان واریز میشود.
                            </p>

                            <form method="post" class="col-12" action="/admin/demand/{{ $demandId }}/pay">
                                @csrf
                                <div class="row">
                                        <div class="col-md-2 col-sm-6">
                                            <input type="text" name="amount" class="form-control" placeholder="مبلغ">
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <input type="submit" class="form-control btn btn-info" value="تایید و پرداخت">
                                        </div>
                                </div>
                            </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection