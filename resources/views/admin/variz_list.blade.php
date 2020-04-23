@extends('../dashbordLayout')

@section('title', 'واریز های مدیران')

@section('content')

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">موجودی کل</span>
                    <span class="info-box-number">۴۱,۴۱۰</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">مجموع واریز ها</span>
                    <span class="progress-description">30,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">مجموع کمک ها</span>
                    <span class="info-box-number">۴۱,۴۱۰</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">مجموع پرداخت ها</span>
                    <span class="info-box-number">۴۱,۴۱۰</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="row">
        <div class="card card-info col">
            <div class="card-header">
                <h3 class="card-title"> جستجو </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <input type="text" class="form-control" placeholder="مدرسه">
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
                    <h3 class="card-title"> واریز ها </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>کاربر</th>
                            <th>تاریخ</th>
                            <th>وضعیت</th>
                            <th>دلیل</th>
                        </tr>
                        <tr>
                            <td>۱۸۳</td>
                            <td>محمد</td>
                            <td>۱۱-۷-۲۰۱۴</td>
                            <td><span class="badge badge-success">تایید شده</span></td>
                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                        </tr>
                        <tr>
                            <td>۲۱۹</td>
                            <td>حسام</td>
                            <td>۱۱-۷-۲۰۱۴</td>
                            <td><span class="badge bg-danger">در حال بررسی</span></td>
                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                        </tr>
                        <tr>
                            <td>۶۵۷</td>
                            <td>رضا</td>
                            <td>۱۱-۷-۲۰۱۴</td>
                            <td><span class="badge badge-primary">تایید شده</span></td>
                            <td><button class="btn">asfsf</button></td>
                        </tr>
                        <tr>
                            <td>۱۷۵</td>
                            <td>پرهام</td>
                            <td>۱۱-۷-۲۰۱۴</td>
                            <td><span class="badge badge-danger">رد شده</span></td>
                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
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