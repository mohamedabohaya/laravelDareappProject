@extends('layouts.theme')
@section('content')
    <div class="container">
        <form action="/store/city" class="form-group w-50 p-5 text-right" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <select class="form-select w-100 text-primary" aria-label="Default select example" name="name_of_country">
                    <option selected>اختار الدولة المتخصصة</option>
                @foreach($countries as $countriess)
                     <option value="{{$countriess->id}}">{{$countriess->name_of_country}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <h1 class="text-primary"> اضافة المدينة </h1>
            </div>
            <div class="form-group">
                <label class="text-lg" for="name_of_city">المدينة </label>
                <input type="text" name ="name_of_city" class="form-control{{ $errors->has('name_of_city') ? ' is-invalid' : '' }}" id="name_of_city" placeholder="اضافة المدينة..">
            </div>

            <div class ="form-group pt-3">
                <button type="submit" class="btn btn-primary">تم</button>
            </div>
        </form>
    </div>


    <!-- Page Heading -->

@endsection
