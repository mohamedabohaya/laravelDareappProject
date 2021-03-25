@extends('layouts.theme')
@section('content')
    <div class="container">
        <form action="/store/offer" class="form-group w-50 p-5 text-right" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <h1 class="text-primary"> اضافة العرض </h1>
            </div>
            <div class="form-group">
                <select class="form-select w-100 text-primary" aria-label="Default select example" name="name_of_country">
                    <option selected>اختار العقار المتخصصة</option>
                    @foreach($estate as $estates)
                        <option value="{{$estates->id}}">{{$estates->estate_type}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="text-lg" for="price">السعر </label>
                <input type="text" name ="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" id="price" placeholder="السعر..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="expire_at">ينتهي في </label>
                <input type="text" name ="expire_at" class="form-control{{ $errors->has('expire_at') ? ' is-invalid' : '' }}" id="expire_at" placeholder="الفنرة..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="type">النوع</label>
                <input type="text" name ="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" placeholder="النوع..">
            </div>

            <div class ="form-group pt-3">
                <button type="submit" class="btn btn-primary">تم</button>
            </div>
        </form>
    </div>


    <!-- Page Heading -->

@endsection
