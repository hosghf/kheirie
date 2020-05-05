@extends('../dashbordLayout')

@section('title', 'تایید ثبت نام')

@section('content')
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
    @if (session()->has('error'))
        <li class="alert alert-danger">{{ session('error') }}</li>
    @endif
    @if (session()->has('message'))
        <li class="alert alert-success">{{ session('message') }}</li>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">  ثبت نام های جدید </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-center">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>نام </th>
                            <th>نام خانوادگی</th>
                            <th>کد طلبگی</th>
                            <th>کد ملی</th>
                            <th>تایید</th>
                            <th>رد</th>
                        </tr>
                        <div class="d-none">{{$x = 1}}</div>
                        @if(isset($students))
                        @foreach($students as $st)
                            <tr>
                                <td>{{$x++}}</td>
                                <td>{{$st->name}}</td>
                                <td>{{$st->family}}</td>
                                <td>{{$st->code_talabegi}}</td>
                                <td>{{$st->code_meli}}</td>
                                <td>
                                    <a type="button" href="/modir/acceptRegister/{{$st->id}}" class="btn btn-block btn-success btn-sm">تایید ثبت نام</a>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-block btn-danger btn-sm disabled"> رد ثبت نام </a>
                                </td>
                            </tr>
                        @endforeach
                            @endif
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  @if(isset($students))  {{ $students->links() }} @endif
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection