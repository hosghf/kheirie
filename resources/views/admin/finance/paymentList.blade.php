@extends('../dashbordLayout')

@section('title', 'لیست پرداخت ها')

@section('content')

    <div class="row">
        <div class="card card-info col">
            <div class="card-header">
                <h3 class="card-title"> جستجو </h3>
            </div>
            <div class="card-body">
                <form action="/admin/payList" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <input type="text" name="code_meli" class="form-control" placeholder="کد ملی طلبه">
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <input type="submit" class="form-control btn btn-info" value="جستجو">
                        </div>
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
                    <h3 class="card-title"> پرداخت ها </h3>
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
                                    <td>{{ $pay->price }}</td>
                                    <td>{{ $pay->st_code_meli }} </td>
                                    <td> {{ $pay->demand_code }} </td>
                                    <td> {{ $pay->fishChkNum }} </td>
                                    <td> {{ $pay->x }} </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $pays->links() }}
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection