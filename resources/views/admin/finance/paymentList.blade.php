@extends('../dashbordLayout')

@section('title', 'لیست پرداخت ها')

@section('content')


    <div class="row">
        <div class="card card-info col">
            <div class="card-header">
                <h3 class="card-title"> جستجو </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <input type="text" class="form-control" placeholder="نام خانوادگی واریز کننده">
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <input type="button" class="form-control btn btn-info" value="جستجو">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> کمک ها </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>مبلغ</th>
                            <th>کد ملی دانشجو</th>
                            <th> کد درخواست </th>
                            <th>شماره تراکنش</th>
                            <th>تاریخ</th>
                        </tr>
                        @if(isset($pays))
                            <div class="d-none">{{ $x = 1 }}</div>
                            @foreach($pays as $pay)
                                <tr>
                                    <td>{{ $x++ }}</td>
                                    <td>{{ $pay->amount }}</td>
                                    <td>{{ $pay->st_code_meli }} </td>
                                    <td> {{ $pay->demand_code }} </td>
                                    <td> {{ $pay->transaction_number }} </td>
                                    <td> {{ $pay->x }} </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $pays->links() }}
                    {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                        {{--<li class="page-item"><a class="page-link" href="#">«</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">۱</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">۲</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">۳</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">»</a></li>--}}
                    {{--</ul>--}}
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>


@endsection