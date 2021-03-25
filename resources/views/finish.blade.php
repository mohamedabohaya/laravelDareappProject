@extends('layouts.theme')
@section('content')
    <div class="container">
        <form action="/store/finish" class="form-group w-50 p-5 text-right" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <h1 class="text-primary"> اضافة نوع النهاية </h1>
            </div>
            <div class="form-group">
                <label class="text-lg" for="type">النهاية </label>
                <input type="text" name ="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" placeholder="نوع النهاية..">
            </div>
            <div class ="form-group pt-3">
                <button type="submit" class="btn btn-primary">تم</button>
            </div>
        </form>
    </div>



@endsection
