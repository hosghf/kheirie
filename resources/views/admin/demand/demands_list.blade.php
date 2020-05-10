@extends('../dashbordLayout')

@section('title', 'لیست درخواست ها')

@section('content')
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
    <div class="row">
        <div class="card card-info col">
            <div class="card-header">
                <h3 class="card-title"> جستجو </h3>
            </div>
            <div class="card-body">
                <form action="/admin/demand/list" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-6 col-md-3">
                            <input type="text" name="code_meli" class="form-control" placeholder="کد ملی">
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
                    <h3 class="card-title"> درخواست ها </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>کد ملی طلبه</th>
                            <th>شغل سرپرست</th>
                            <th> درآمد سرپرست </th>
                            <th> کد درخواست </th>
                            <th> تاریخ تایید مدیر </th>
                            <th>  </th>
                        </tr>
                        @if(isset($demands))
                            <div class="d-none">{{ $x = 1 }}</div>
                            @foreach($demands as $demand)
                                <tr href="/admin/demand/{{ $demand->id }}" class="tr">
                                    <td>{{ $x++ }}</td>
                                    <td>{{ $demand->student->name }}</td>
                                    <td>{{ $demand->student->family }} </td>
                                    <td>{{ $demand->student_code_meli }}</td>
                                    <td>{{ $demand->student->provider->job }}</td>
                                    <td>{{ $demand->sal}}</td>
                                    <td>{{ $demand->id }}</td>
                                    <td>{{ $demand->m1 }} </td>
                                    <td> <a href="/admin/demand/{{ $demand->id }}" class="btn btn-primary"> مشاهده </a> </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{$demands->links()}}
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>


@endsection

@section('js')
    {{--<script src="/dashbordResources/dist/js/clickTable.js"></script>--}}
@endsection