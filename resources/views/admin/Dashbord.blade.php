@extends('../dashbordLayout')

@section('title', 'داشبورد')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-sm-12 col-md-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h4>{{ $total }}</h4>

                    <p>موجودی</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">تومان </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-sm-12 col-md-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h4>{{ $income }}</h4>
                    <p>میزان واریز ها</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <p class="small-box-footer">تومان</p>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-sm-12 col-md-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4>{{ $payment }}</h4>
                    <p> میزان کل پرداخت ها </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer"> تومان</a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-sm-12 col-md-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4>{{ $help }}</h4>
                    <p> کمک های مردمی </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer"> تومان</a>
            </div>
        </div>
    </div>

        <div class="row mt-5">
        @foreach($daste as $d)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="spin fa fa-dollar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"> {{ $d->title }} </span>
                        <span class="info-box-number">
                      {{ $d->m }}
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        @endforeach
        </div>

@endsection
