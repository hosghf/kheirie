@extends('../dashbordLayout')

@section('title', 'تنظیمان برنامه')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">

                    <div class="row col-sm-12 col-md-6 m-auto">
                        <div class="card card-info col">
                            <div class="card-header">
                                <h3 class="card-title">افزودن نوع واریز ها </h3>
                            </div>
                            <div class="card-body">
                                @if(isset($type))
                                    @foreach($type as $t)
                                        <div class="row">
                                            <p><span>{{ $t->id }}</span> -
                                                {{$t->title}}
                                            </p>
                                        </div>
                                    @endforeach
                                @endif
                                <form method="post" class="col-12" action="/admin/settings/addType">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-6">
                                            <input type="text" name="title" class="form-control" placeholder="نوع">
                                        </div>
                                        <div class="col-6">
                                            <input type="submit" class="form-control btn btn-info" value=" اضافه ">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="mt-5"></div>
                    <div class="row col-sm-12 col-md-6 m-auto">
                        <div class="card card-info col">
                            <div class="card-header">
                                <h3 class="card-title"> تغییر متن و عناوین </h3>
                            </div>
                            <div class="card-body">
                                <form method="post" class="col-12" action="/admin/settings/changetext">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-12">
                                            <label>عنوان صفحه ورود سمت راست</label>
                                            <textarea class="form-control" name="righttitle">{{$texts[0]['text']}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-row mt-4">
                                        <div class="col-12">
                                            <label>عنوان چپ</label>
                                            <textarea class="form-control" name="lefttitle">{{$texts[1]['text']}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-row mt-4">
                                        <div class="col-12">
                                            <label>متن چپ</label>
                                            <textarea class="form-control" name="lefttext">{{$texts[2]['text']}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-row mt-4">
                                        <div class="col-12">
                                            <input type="submit" class="form-control btn btn-info" value=" تغییر ">
                                        </div>
                                    </div>

                                </form>


                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>

@endsection