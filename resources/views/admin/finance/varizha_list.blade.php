@extends('../dashbordLayout')

@section('title', 'لیست واریز ها')
@section('content')

    <div class="row">
        <div class="card card-info col">
            <div class="card-header">
                <h3 class="card-title"> جستجو </h3>
            </div>
            <div class="card-body">
                <form method="post" action="/admin/varizha" >
                    @csrf
                    <div class="row">
                            <label>مدرسه</label>
                        <div class="col-sm-6 col-md-2">
                            <select name="school" class="form-control">
                                <option></option>
                                @foreach($school as $s)
                                    <option value="{{$s->id}}">{{ $s->school_name }}</option>
                                @endforeach
                            </select>
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
                    <h3 class="card-title"> واریز ها </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-center">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>مبلغ</th>
                            <th>مدرسه</th>
                            <th>نوع</th>
                            <th>شماره تراکنش</th>
                            <th> تصویر چک/فیش </th>
                            <th> توضیحات </th>
                            <th>تاریخ</th>
                        </tr>
                        @if(isset($varizha))
                            <div class="d-none">{{ $x = 1 }}</div>
                            @foreach($varizha as $variz)
                                <tr>
                                    <td>{{ $x++ }}</td>
                                    <td>{{ $variz->price }}</td>
                                    <td>{{ $variz->school->school_name }}</td>
                                    <td>{{ $variz->typeOfIncome->title }}</td>
                                    <td> {{ $variz->kartTransactNum }} </td>
                                    <td><a target="_blank" href="{{ URL::to('/') }}/fishimages/{{$variz->y}}/{{$variz->m}}/{{$variz->tasvirFish}}">کلیک کنید</a></td>
                                    <td>
                                        @if(strlen($variz->tozihat) > 0)
                                            <div class="tooltip">{{ $variz->tzs }}<span class="tooltiptext">{{ $variz->tozihat }}</span></div>
                                        @endif
                                    </td>
                                    <td> {{ $variz->x }} </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{$varizha->links()}}
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>


@endsection