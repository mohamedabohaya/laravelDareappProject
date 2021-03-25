@extends('layouts.theme')
@section('content')
    <div class="container">
        <form action="/store/area" class="form-group w-50 p-5 text-right" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <select class="form-select w-100 text-primary" aria-label="Default select example" name="name_of_country">
                    <option selected>اختار المدينة المتخصصة</option>
                    @foreach($cities as $citiess)
                        <option value="{{$citiess->id}}">{{$citiess->name_of_city}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <h1 class="text-primary"> اضافة المنطقة </h1>
            </div>
            <div class="form-group">
                <label class="text-lg" for="name_of_area">المنطقة </label>
                <input type="text" name ="name_of_area" class="form-control{{ $errors->has('name_of_area') ? ' is-invalid' : '' }}" id="name_of_area" placeholder="اضافة المنطقة..">
            </div>

            <div class ="form-group pt-3">
                <button type="submit" class="btn btn-primary">تم</button>
            </div>
        </form>
    </div>


    <!-- Page Heading -->

@endsection
