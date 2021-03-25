@extends('layouts.theme')
@section('content')
    <div class="container">
        <form action="/store/currency" class="form-group w-50 p-5 text-right" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <h1 class="text-primary"> اضافة العملة </h1>
            </div>
            <div class="form-group">
                <label class="text-lg" for="name_of_currency">العملة </label>
                <input type="text" name ="name_of_currency" class="form-control{{ $errors->has('name_of_currency') ? ' is-invalid' : '' }}" id="name_of_currency" placeholder="اضافة العملة..">
            </div>

            <div class ="form-group pt-3">
                <button type="submit" class="btn btn-primary">تم</button>
            </div>
        </form>
    </div>


    <!-- Page Heading -->

@endsection
