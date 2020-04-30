@extends('../dashbordLayout')

@section('title', 'تنظیمان برنامه')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">

                    <div class="row col-6 m-auto">
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
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>

@endsection