@extends('layouts.theme')
@section('content')
    <div class="container">
        <form action="/store/ticket" class="form-group w-50 p-5 text-right" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <h1 class="text-primary"> اضافة تذكرة </h1>
            </div>

            <div class="form-group">
                <label class="text-lg" for="title">العنوان </label>
                <input type="text" name ="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" placeholder="العنوان..">
            </div>

            <div class="form-group">
                <label class="text-lg" for="message">الرسالة </label>
                <input type="text" name ="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" id="message" placeholder="الرسالة..">
            </div>

            <div class="form-group">
                <label class="form-label text-lg" for="attachment">اضافة المرفق</label>
                <br>
                <input type="file"  id="attachment" name="attachment"/>
            </div>

            <div class ="form-group pt-3">
                <button type="submit" class="btn btn-primary">تم</button>
            </div>
        </form>
    </div>


    <!-- Page Heading -->

@endsection
