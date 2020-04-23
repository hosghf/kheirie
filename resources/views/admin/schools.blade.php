@extends('admin.adminDashbord')

@section('title', 'مدارس')

@section('content')

    <div class="row">

        <div class="card card-gray col-11 m-auto">
            <div class="card-header">
                <h3 class="card-title"> ثبت مدرسه </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="school_name" placeholder="نام مدرسه">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="" placeholder="آدرس مدرسه">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="" placeholder="نام مدیر">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="" placeholder=" نام خانوادگی مدیر">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="" placeholder=" آدرس مدرسه ">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="" placeholder=" کد ملی مدیر ">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="" placeholder="همراه مدیر">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="form-group">
                            <input type="button" class="btn btn-gray" value="ثبت مدرسه">
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>

@endsection