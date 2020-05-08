@extends('../../dashbordLayout')

@section('title', 'مدارس')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @if(session()->has('message'))
                    <div class="col-11 m-auto">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ session()->get('message') }}
                        </div>
                    </div>
                @endif
                <div class="card card-gray col-11 m-auto">
                    <div class="card-header">
                        <h3 class="card-title"> ویرایش مدرسه </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="/admin/editSchool/{{$school->id}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label>
                                        <span class="text-danger">*</span>
                                        نام مدرسه
                                    </label>
                                    <input type="text" class="form-control" name="school_name" value="{{$school->school_name }}" id="school_name" placeholder="نام مدرسه">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label>
                                        آدرس مدرسه
                                    </label>
                                    <input type="text" class="form-control" name="school_address" value="{{$school->address }}" id="" placeholder="آدرس مدرسه">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label>
                                        <span class="text-danger">*</span>
                                        نام مدیر
                                    </label>
                                    <input type="text" class="form-control" name="managerName" value="{{$school->manager_name }}" id="" placeholder="نام مدیر">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label>
                                        <span class="text-danger">*</span>
                                        نام خانوادگی مدیر
                                    </label>
                                    <input type="text" class="form-control" name="managerFamily" value="{{$school->manager_family }}" id="" placeholder=" نام خانوادگی مدیر">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label>
                                        تلفن مدرسه
                                    </label>
                                    <input type="text" class="form-control" name="school_phone" value="{{$school->school_phone }}" placeholder=" تلفن مدرسه ">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label>
                                        <span class="text-danger">*</span>
                                        کد ملی مدیر
                                    </label>
                                    <input type="text" class="form-control" name="code_meli_modir" value="{{$school->manager_code_meli }}" id="" placeholder=" کد ملی مدیر ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label>
                                        <span class="text-danger">*</span>
                                        همراه مدیر(نام کاربری)
                                    </label>
                                    <input type="text" class="form-control" name="modir_phone" value="{{$school->manager_mobile }}" id="" placeholder="همراه مدیر">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info" value="ویرایش مدرسه">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
            <!-- /.row -->


            <div class="row mt-3">
                <div class="card card-info col-11 m-auto">
                    <div class="card-header">
                        <h3 class="card-title"> تغییر رمز </h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/changeP/{{$school->school_phone}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <input type="text" name="password" class="form-control" placeholder="رمز">
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <input type="submit" class="form-control btn btn-info" value="ثبت">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>



            <div class="row mt-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> لیست مدارس </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>شماره</th>
                                    <th>نام مدرسه</th>
                                    <th> مدیر </th>
                                    <th>تلفن مدرسه</th>
                                    <th>همراه مدیر</th>
                                    <th> کد ملی مدیر </th>
                                    <th> </th>
                                </tr>
                                @if(isset($schools))
                                    <div class="d-none"> {{ $i = 1 }} </div>
                                    @foreach($schools as $st)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $st->school_name }}</td>
                                            <td>{{ $st->manager_family }}</td>
                                            <td>{{ $st->school_phone }}</td>
                                            <td>{{ $st->manager_mobile }}</td>
                                            <td> {{$st->manager_code_meli}} </td>
                                            <td> <a href="/admin/editSchool/{{$st->id}}" class="btn btn-primary" >ویرایش</a> </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>

@endsection