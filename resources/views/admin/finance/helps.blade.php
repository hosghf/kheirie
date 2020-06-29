@extends('../dashbordLayout')

@section('title', 'لیست واریز ها')

@section('content')

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
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th> سازمان </th>
                            <th>نوع</th>
                            <th>توضیحات</th>
                            <th>شماره تراکنش</th>
                            <th>تاریخ</th>
                        </tr>
                        @if(isset($helps))
                            <div class="d-none">{{ $x = 1 }}</div>
                            @foreach($helps as $help)
                                <tr>
                                    <td>{{ $x++ }}</td>
                                    <td>{{ $help->price }}</td>
                                    <td>{{ $help->name }} </td>
                                    <td> {{$help->family}} </td>
                                    <td> {{ $help->organization }} </td>
                                    <td>{{ $help->typeOfIncome->title }}</td>
                                    <td>
                                        @if(strlen($help->tozihat) > 0)
                                            <div class="tooltip">{{ $help->tzs }}<span class="tooltiptext">{{ $help->tozihat }}</span></div>
                                        @endif
                                    </td>
                                    <td> {{ $help->transaction_number }} </td>
                                    <td> {{ $help->x }} </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $helps->links() }}
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>


@endsection