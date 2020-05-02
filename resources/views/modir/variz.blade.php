@extends('../dashbordLayout')

@section('title', 'واریز نقدی مدیر')

@section('content')
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
    @if (session()->has('error'))
        <li class="alert alert-danger">{{ session('error') }}</li>
    @endif
    @if (session()->has('message'))
        <li class="alert alert-danger">{{ session('message') }}</li>
    @endif
    <div class="row">
        <div class="card card-info col">
            <div class="card-header">
                <h3 class="card-title"> واریز مدیر </h3>
            </div>
            <div class="card-body">
                <form method="post" class="col-12" enctype="multipart/form-data" action="/modir/varizModir">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-2 col-sm-6 mt-4">
                            <label>مبلغ</label>
                            <input type="text" name="amount" class="form-control" placeholder="مبلغ">
                        </div>
                        <div class="col-md-2 col-sm-6 mt-4">
                            <label> دسته </label>
                            <select name="daste" class="form-control">
                                @foreach($daste as $d)
=                                  <option value="{{ $d->id }}"> {{$d->title}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-md-2 col-sm-6 mt-4">
                            <label>نوع پرداخت</label>
                            <select name="darghah" class="form-control">
                                <option value="1">درگاه پرداخت</option>
                                <option value="0">کارت به کارت</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 mt-4">
                            <label>شماره چک/فیش</label>
                            <input type="text" name="checkFishNum" class="form-control">
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> واریز های مدرسه </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>مبلغ</th>
                            <th>مدرسه</th>
                            <th>دسته</th>
                            <th>نوع پرداخت</th>
                            <th>شماره چک یا فیش</th>
                            <th>تاریخ</th>
                        </tr>
                        @if(isset($varizha))
                            @foreach($varizha as $v)
                                <tr>
                                    <td>{{ $v->id }}</td>
                                    <td>{{ $v->amount }}</td>
                                    <td>{{ $v->school_code }}</td>
                                    <td>{{ $v->typeOfIncome->title }}</td>
                                    <td>{{ $v->type ? 'درگاه اینترنتی' : 'کارت به کارت' }}</td>
                                    <td>{{ $v->kartTransactNum }}</td>
                                    <td>{{ $v->tarikh }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ isset($varizha) ? $varizha->links() : '' }}
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection