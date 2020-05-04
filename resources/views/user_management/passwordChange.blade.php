@extends('../dashbordLayout')

@section('title', 'تغییر رمز')

@section('content')
    @if (session()->has('message'))
        <li class="alert alert-success">{{ session('message') }}</li>
    @endif
    <div class="row mt-3">
        <div class="card card-info col-11 m-auto">
            <div class="card-header">
                <h3 class="card-title"> تغییر رمز </h3>
            </div>
            <div class="card-body">
                @can('isAdmin')
                    <form method="post" action="/changeP/{{ auth()->user()->username }}">
                @endcan
                @can('isModir')
                    <form method="post" action="/changePm/{{ auth()->user()->username }}">
                @endcan
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <input type="password" name="password" class="form-control" placeholder="رمز">
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <input type="submit" class="form-control btn btn-info" value="تغییر">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

@endsection