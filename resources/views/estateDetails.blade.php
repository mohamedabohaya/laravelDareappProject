@extends('layouts.theme')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1 class="h3 mb-2 text-gray-800">جدول العقارات التجارية </h1>
            <a class="btn btn-primary mb-2 ml-2" href="/estate"> اضافة عقار جديد </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-right">العقارات</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive text-center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @if(count() >= 0)
                        <?php $estatess = $estate;?>
{{--                        @foreach($estate as $estatess)--}}
                        <tbody>
                        <tr>
                            <th>صاحب العقار</th>
                            <th>{{$estatess->contact_name}}</th>
                        </tr>
                        <tr>
                            <th>المدينة</th>
                            <th>{{$estatess->city->name_of_city}}</th>
                        </tr>
                        <tr>
                            <th>المنطقة</th>
                            <th>{{$estatess->area->name_of_area}}</th>
                        </tr>
                        <tr>
                            <th>نوع العقار</th>
                            <th>{{$estatess->estate_type}}</th>
                        </tr>
                        <tr>
                            <th>الشارع</th>
                            <th>{{$estatess->street}}</th>
                        </tr>
                        <tr>
                            <th>منطقة العقار</th>
                            <th>{{$estatess->estate_area}}</th>
                        </tr>
                        <tr>
                            <th>السعر</th>
                            <th>{{$estatess->price}}</th>
                        </tr>
                        <tr>
                            <th>العملة</th>
                            <th>{{$estatess->currency->name_of_currency}}</th>
                        </tr>
                        <tr>
                            <th>مساحة الارض</th>
                            <th>{{$estatess->land_area}}</th>
                        </tr>
                        <tr>
                            <th>منطقة البناء</th>
                            <th>{{$estatess->building_area}}</th>
                        </tr>
                        <tr>
                            <th>عمر البناء</th>
                            <th>{{$estatess->building_age}}</th>
                        </tr>
                        <tr>
                            <th>مساحة الشقة</th>
                            <th>{{$estatess->apartment_area}}</th>
                        </tr>
                        <tr>
                            <th>طابق الشقة</th>
                            <th>{{$estatess->building_area}}</th>
                        </tr>
                        <tr>
                            <th>واجهة الارض</th>
                            <th>{{$estatess->land_interface}}</th>
                        </tr>
                        <tr>
                            <th>طول منطقة المتجر</th>
                            <th>{{$estatess->shop_length_area}}</th>
                        </tr>
                        <tr>
                            <th>عرض منطقة المتجر</th>
                            <th>{{$estatess->shop_width_area}}</th>
                        </tr>
                        <tr>
                            <th>عدد الغرف</th>
                            <th>{{$estatess->room_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد الحمامات</th>
                            <th>{{$estatess->bathroom_no}}</th>
                        </tr>
                        <tr>
                            <th>description</th>
                            <th>{{$estatess->description}}</th>
                        </tr>
                        <tr>
                            <th>مصف سيارة</th>
                            <th>{{$estatess->has_garage}}</th>
                        </tr>
                        <tr>
                            <th> has well </th>
                            <th>{{$estatess->has_well}}</th>
                        </tr>
                        <tr>
                            <th>هناك اطلالة على الشارع العام؟</th>
                            <th>{{$estatess->has_public_street_view}}</th>
                        </tr>
                        <tr>
                            <th>هناك اطلالة على البحر؟</th>
                            <th>{{$estatess->has_sea_view}}</th>
                        </tr>
                        <tr>
                            <th>عدد المدارس الابتدائية</th>
                            <th>{{$estatess->elementary_schools_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد المدارس الاعدادية</th>
                            <th>{{$estatess->preparatory_schools_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد المدارس الثانوية</th>
                            <th>{{$estatess->secondary_schools_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد الروضات </th>
                            <th>{{$estatess->kindergarten_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد الصيدليات </th>
                            <th>{{$estatess->pharmacy_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد الجوامع </th>
                            <th>{{$estatess->mosque_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد المستشفيات </th>
                            <th>{{$estatess->hospital_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد المخابز </th>
                            <th>{{$estatess->bakery_no}}</th>
                        </tr>
                        <tr>
                            <th>عدد المولات </th>
                            <th>{{$estatess->mall_no}}</th>
                        </tr>
                        <tr>
                            <th>منطقة سكنية ؟ </th>
                            <th>{{$estatess->is_residential}}</th>
                        </tr>
                        <tr>
                            <th>منطقة زراعية ؟ </th>
                            <th>{{$estatess->is_agricultural}}</th>
                        </tr>
                        <tr>
                            <th>منطقة تجارية ؟ </th>
                            <th>{{$estatess->is_commercial}}</th>
                        </tr>
                        <tr>
                            <th>منطقة صناعية ؟ </th>
                            <th>{{$estatess->is_industrial}}</th>
                        </tr>
                        <tr>
                            <th>منطقة طابو ؟ </th>
                            <th>{{$estatess->is_taboo}}</th>
                        </tr>
                        <tr>
                            <th>يوجد علية ؟ </th>
                            <th>{{$estatess->has_attic}}</th>
                        </tr>
                        <tr>
                            <th>نوع الدفع نقدآ ؟ </th>
                            <th>{{$estatess->is_payment_type_cash}}</th>
                        </tr>
                        <tr>
                            <th>تم ارسال؟ </th>
                            <th>{{$estatess->is_payment_type_installment}}</th>
                        </tr>
                        <tr>
                            <th>طريقة التحويل؟ </th>
                            <th>{{$estatess->is_payment_type_switching}}</th>
                        </tr>
                        <tr>
                            <th>رقم جهة الاتصال الشخص الاول </th>
                            <th>{{$estatess->contact_mobile1}}</th>
                        </tr>
                        <tr>
                            <th>رقم جهة الاتصال الشخص الثاني </th>
                            <th>{{$estatess->contact_mobile2}}</th>
                        </tr>
                        <tr>
                            <th>احداثيات </th>
                            <th>{{$estatess->lat}}</th>
                        </tr>
                        <tr>
                            <th>احداثيات </th>
                            <th>{{$estatess->Ing}}</th>
                        </tr>
                        </tbody>
{{--                        @endforeach--}}
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection

