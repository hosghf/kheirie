@extends('../dashbordLayout')

@section('title', 'تایید ثبت نام')

@section('content')

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
                        <tr>
                            <td>۱۸۳</td>
                            <td>محمد</td>
                            <td>۱۱-۷-۲۰۱۴</td>
                            <td>757565765</td>
                            <td>ناتن</td>
                            <td>
                                <button type="button" class="btn btn-block btn-success btn-sm">تایید ثبت نام</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger btn-sm"> رد ثبت نام </button>
                            </td>
                        </tr>
                        <tr>
                            <td>۱۸۳</td>
                            <td>محمد</td>
                            <td>۱۱-۷-۲۰۱۴</td>
                            <td>757565765</td>
                            <td>ناتن</td>
                            <td>
                                <button type="button" class="btn btn-block btn-success btn-sm">تایید ثبت نام</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger btn-sm"> رد ثبت نام </button>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                        <li class="page-item"><a class="page-link" href="#">۲</a></li>
                        <li class="page-item"><a class="page-link" href="#">۳</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection