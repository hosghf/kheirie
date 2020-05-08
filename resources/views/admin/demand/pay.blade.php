@extends('../../dashbordLayout')

@section('title', ' تایید و پرداخت ')

@section('content')
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
    @if (session()->has('error'))
        <li class="alert alert-danger">{{ session('error') }}</li>
    @endif
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

                            <form method="post" class="col-12 mt-5" enctype="multipart/form-data"
                                  action="/admin/demand/{{ $demandId }}/pay">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-2 col-sm-6 mt-4">
                                        <label>مبلغ</label>
                                        <input type="text" name="amount" class="form-control" value="{{old('amount')}}" placeholder="مبلغ">
                                    </div>
                                    <div class="col-md-2 col-sm-6 mt-4">
                                        <label>نوع پرداخت</label>
                                        <select name="check" class="form-control">
                                            <option value="1" >چک</option>
                                            <option value="0">کارت به کارت</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-6 mt-4">
                                        <label>شماره چک/فیش</label>
                                        <input type="text" name="fishCheckNum" value="{{ old('fishCheckNum') }}" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-3 col-sm-6 mt-4">
                                        <label>تصویر چک/فیش</label>
                                        <input type="file" name="file" class="form-control" placeholder="انتخاب تصویر">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-2 mt-4">
                                    <label> </label>
                                    <input type="submit" class="form-control btn btn-info" value="تایید و پرداخت">
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