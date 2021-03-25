@extends('layouts.theme')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1 class="h3 mb-2 text-gray-800">جدول العقارات التجارية </h1>
            <a class="btn btn-primary mb-2" href="/estate"> اضافة عقار جديد </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-right">العقارات</h6>
            </div>
            <div class="card-body">
                <form action="/estate/search" method="get">
                    <div class="input-group col-md-6 pb-3 ">
                        <input type="search" name="search" class="form-control" placeholder="ادخل كلمة البحث هنا  ..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive text-center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>صاحب العقار</th>
                            <th>حذف </th>
                        </tr>
                        </thead>
                        @foreach($estate as $estates)
                                <tbody>
                                <tr>
                                    <td><a href="/estate/view/details/{{$estates->id}}">{{$estates->contact_name}}</a></td>
                                    <td>
                                        <a href="/estate/delete/{{$estates->id}}" class="btn default btn-danger"><i class="fa fa-trash"></i></a>
                                <tr>
                                </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection

