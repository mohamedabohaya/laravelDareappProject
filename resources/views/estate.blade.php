@extends('layouts.theme')
@section('content')
    <div class="container">
        <form action="/store/estate" class="form-group w-50 p-5 text-right" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <h1 class="text-primary"> اضافة عقار جديد </h1>
            </div>
            <div class="form-group">
                <label class="text-lg" for="estate_type">نوع العقار </label>
                <input type="text" name ="estate_type" class="form-control{{ $errors->has('estate_type') ? ' is-invalid' : '' }}" id="estate_type" placeholder="نوع العقار..">
            </div>
{{--            <div class="form-group">--}}
{{--                <select class="form-select w-100 text-dark" aria-label="Default select example" name="name_of_country">--}}
{{--                    <option selected>اختار نوع العرض</option>--}}
{{--                    @foreach($cities as $citiess)--}}
{{--                        <option value="{{$citiess->id}}">{{$citiess->name_of_city}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
            <div class="form-group">
                <select class="form-select w-100 text-dark" aria-label="Default select example" name="name_of_country">
                    <option selected>اختار المدينة المتخصصة</option>
                    @foreach($cities as $citiess)
                        <option value="{{$citiess->id}}">{{$citiess->name_of_city}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-select w-100 text-dark " aria-label="Default select example" name="name_of_country">
                    <option selected>اختار المنطقة المتخصصة</option>
                    @foreach($area as $areas)
                        <option value="{{$areas->id}}">{{$areas->name_of_area}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="text-lg" for="street">الشارع </label>
                <input type="text" name ="street" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" id="street" placeholder="الشارع..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="estate_area">منطقة العقار </label>
                <input type="text" name ="estate_area" class="form-control{{ $errors->has('estate_area') ? ' is-invalid' : '' }}" id="estate_area" placeholder="المنطقة..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="price">السعر </label>
                <input type="text" name ="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" id="price" placeholder="السعر..">
            </div>
            <div class="form-group">
                <select class="form-select w-100 text-dark" aria-label="Default select example" name="name_of_country">
                    <option selected>اختار العملة</option>
                    @foreach($currency as $currencies)
                        <option value="{{$currencies->id}}">{{$currencies->name_of_currency}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="text-lg" for="land_area">مساحة الارض </label>
                <input type="text" name ="land_area" class="form-control{{ $errors->has('land_area') ? ' is-invalid' : '' }}" id="land_area" placeholder="المساحة..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="building_area">منطقة البناء</label>
                <input type="text" name ="building_area" class="form-control{{ $errors->has('building_area') ? ' is-invalid' : '' }}" id="building_area" placeholder="المنطقة..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="building_age">عمر البناء </label>
                <input type="text" name ="building_age" class="form-control{{ $errors->has('building_age') ? ' is-invalid' : '' }}" id="building_age" placeholder="المدة..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="apartment_area">مساحة الشقة </label>
                <input type="text" name ="apartment_area" class="form-control{{ $errors->has('apartment_area') ? ' is-invalid' : '' }}" id="apartment_area" placeholder="المساحة..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="apartment_floor">طابق الشقة </label>
                <input type="text" name ="apartment_floor" class="form-control{{ $errors->has('apartment_floor') ? ' is-invalid' : '' }}" id="apartment_floor" placeholder="الطابق..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="land_interface">واجهة الارض </label>
                <input type="text" name ="land_interface" class="form-control{{ $errors->has('land_interface') ? ' is-invalid' : '' }}" id="land_interface" placeholder="الاتجاه..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="shop_length_area">طول منطقة المتجر </label>
                <input type="text" name ="shop_length_area" class="form-control{{ $errors->has('shop_length_area') ? ' is-invalid' : '' }}" id="shop_length_area" placeholder="الطول..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="shop_width_area">عرض منطقة المتجر </label>
                <input type="text" name ="shop_width_area" class="form-control{{ $errors->has('shop_width_area') ? ' is-invalid' : '' }}" id="shop_width_area" placeholder="العرض..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="room_no">عدد الغرف </label>
                <input type="text" name ="room_no" class="form-control{{ $errors->has('room_no') ? ' is-invalid' : '' }}" id="room_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="bathroom_no">عدد الحمامات </label>
                <input type="text" name ="bathroom_no" class="form-control{{ $errors->has('bathroom_no') ? ' is-invalid' : '' }}" id="bathroom_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="halls_no">عدد القاعات </label>
                <input type="text" name ="halls_no" class="form-control{{ $errors->has('halls_no') ? ' is-invalid' : '' }}" id="halls_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="floors_no">عدد الطوابق </label>
                <input type="text" name ="floors_no" class="form-control{{ $errors->has('floors_no') ? ' is-invalid' : '' }}" id="floors_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="description">الوصف </label>
                <input type="text" name ="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" placeholder="الوصف..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="has_garage">يوجد مصف سيارة ؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="has_garage" name="has_garage">
                    <option selected>اختار </option>
                        <option value="0" id="has_garage" name="has_garage" class="form-control{{ $errors->has('has_garage') ? ' is-invalid' : '' }}">نعم</option>
                        <option value="1" id="has_garage" name="has_garage" class="form-control{{ $errors->has('has_garage') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>
            <div class="form-group">
                <label class="text-lg" for="has_well">has_well ? </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="has_well" name="has_well">
                    <option selected>اختار </option>
                    <option value="0" id="has_well" name="has_well" class="form-control{{ $errors->has('has_well') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="has_well" name="has_well" class="form-control{{ $errors->has('has_well') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>
            <div class="form-group">
                <label class="text-lg" for="has_public_street_view">هناك اطلالة على الشارع العام؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="has_public_street_view" name="has_public_street_view">
                    <option selected>اختار </option>
                    <option value="0" id="has_public_street_view" name="has_public_street_view" class="form-control{{ $errors->has('has_public_street_view') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="has_public_street_view" name="has_public_street_view" class="form-control{{ $errors->has('has_public_street_view') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>

            <div class="form-group">
                <label class="text-lg" for="has_sea_view">هناك اطلالة على البحر؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="has_sea_view" name="has_sea_view">
                    <option selected>اختار </option>
                    <option value="0" id="has_sea_view" name="has_sea_view" class="form-control{{ $errors->has('has_sea_view') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="has_sea_view" name="has_sea_view" class="form-control{{ $errors->has('has_sea_view') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>
            <div class="form-group">
                <label class="text-lg" for="elementary_schools_no">عدد المدارس الابتدائية </label>
                <input type="text" name ="elementary_schools_no" class="form-control{{ $errors->has('elementary_schools_no') ? ' is-invalid' : '' }}" id="elementary_schools_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="preparatory_schools_no">عدد المدارس الاعدادية </label>
                <input type="text" name ="preparatory_schools_no" class="form-control{{ $errors->has('preparatory_schools_no') ? ' is-invalid' : '' }}" id="preparatory_schools_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="secondary_schools_no">عدد المدارس الثانوية </label>
                <input type="text" name ="secondary_schools_no" class="form-control{{ $errors->has('secondary_schools_no') ? ' is-invalid' : '' }}" id="secondary_schools_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="kindergarten_no">عدد الروضات </label>
                <input type="text" name ="kindergarten_no" class="form-control{{ $errors->has('kindergarten_no') ? ' is-invalid' : '' }}" id="kindergarten_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="pharmacy_no">عدد الصيدليات </label>
                <input type="text" name ="pharmacy_no" class="form-control{{ $errors->has('pharmacy_no') ? ' is-invalid' : '' }}" id="pharmacy_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="mosque_no">عدد الجوامع </label>
                <input type="text" name ="mosque_no" class="form-control{{ $errors->has('mosque_no') ? ' is-invalid' : '' }}" id="mosque_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="hospital_no">عدد المستشفيات </label>
                <input type="text" name ="hospital_no" class="form-control{{ $errors->has('hospital_no') ? ' is-invalid' : '' }}" id="hospital_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="bakery_no">عدد المخابز </label>
                <input type="text" name ="bakery_no" class="form-control{{ $errors->has('bakery_no') ? ' is-invalid' : '' }}" id="bakery_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="mall_no">عدد المولات </label>
                <input type="text" name ="mall_no" class="form-control{{ $errors->has('mall_no') ? ' is-invalid' : '' }}" id="mall_no" placeholder="العدد..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="is_residential">منطقة سكنية ؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="is_residential" name="is_residential">
                    <option selected>اختار </option>
                    <option value="0" id="is_residential" name="is_residential" class="form-control{{ $errors->has('is_residential') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="is_residential" name="is_residential" class="form-control{{ $errors->has('is_residential') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>

            <div class="form-group">
                <label class="text-lg" for="is_agricultural">منطقة زراعية ؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="is_agricultural" name="is_agricultural">
                    <option selected>اختار </option>
                    <option value="0" id="is_agricultural" name="is_agricultural" class="form-control{{ $errors->has('is_agricultural') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="is_agricultural" name="is_agricultural" class="form-control{{ $errors->has('is_agricultural') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>

            <div class="form-group">
                <label class="text-lg" for="is_commercial">منطقة تجارية ؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="is_commercial" name="is_commercial">
                    <option selected>اختار </option>
                    <option value="0" id="is_commercial" name="is_commercial" class="form-control{{ $errors->has('is_commercial') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="is_commercial" name="is_commercial" class="form-control{{ $errors->has('is_commercial') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>

            <div class="form-group">
                <label class="text-lg" for="is_industrial">منطقة صناعية ؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="is_industrial" name="is_industrial">
                    <option selected>اختار </option>
                    <option value="0" id="is_industrial" name="is_industrial" class="form-control{{ $errors->has('is_industrial') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="is_industrial" name="is_industrial" class="form-control{{ $errors->has('is_industrial') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>

            <div class="form-group">
                <label class="text-lg" for="is_taboo">منطقة طابو ؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="is_taboo" name="is_taboo">
                    <option selected>اختار </option>
                    <option value="0" id="is_taboo" name="is_taboo" class="form-control{{ $errors->has('is_taboo') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="is_taboo" name="is_taboo" class="form-control{{ $errors->has('is_taboo') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>

            <div class="form-group">
                <label class="text-lg" for="has_attic"> يوجد علية ؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="has_attic" name="has_attic">
                    <option selected>اختار </option>
                    <option value="0" id="has_attic" name="has_attic" class="form-control{{ $errors->has('has_attic') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="has_attic" name="has_attic" class="form-control{{ $errors->has('has_attic') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>
            <div class="form-group">
                <label class="text-lg" for="is_payment_type_cash">نوع الدفع نقدآ ؟ </label>
                <input type="text" name ="is_payment_type_cash" class="form-control{{ $errors->has('is_payment_type_cash') ? ' is-invalid' : '' }}" id="is_payment_type_cash" placeholder="كاش او لا ..">
            </div>

            <div class="form-group">
                <label class="text-lg" for="is_payment_type_installment"> تم ارسال؟ </label>
                <select class="form-select w-100 text-dark" aria-label="Default select example" id="is_payment_type_installment" name="is_payment_type_installment">
                    <option selected>اختار </option>
                    <option value="0" id="is_payment_type_installment" name="is_payment_type_installment" class="form-control{{ $errors->has('is_payment_type_installment') ? ' is-invalid' : '' }}">نعم</option>
                    <option value="1" id="is_payment_type_installment" name="is_payment_type_installment" class="form-control{{ $errors->has('is_payment_type_installment') ? ' is-invalid' : '' }}">لا</option>
                </select>
            </div>
            <div class="form-group">
                <label class="text-lg" for="is_payment_type_switching">طريقة التحويل؟ </label>
                <input type="text" name ="is_payment_type_switching" class="form-control{{ $errors->has('is_payment_type_switching') ? ' is-invalid' : '' }}" id="is_payment_type_switching" placeholder="طريقة التحويل..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="contact_name">اسم جهة الاتصال </label>
                <input type="text" name ="contact_name" class="form-control{{ $errors->has('contact_name') ? ' is-invalid' : '' }}" id="contact_name" placeholder="الاسم..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="contact_identity">هوية جهة الاتصال </label>
                <input type="text" name ="contact_identity" class="form-control{{ $errors->has('contact_identity') ? ' is-invalid' : '' }}" id="contact_identity" placeholder="الهوية..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="contact_mobile1">رقم جهة الاتصال الشخص الاول </label>
                <input type="text" name ="contact_mobile1" class="form-control{{ $errors->has('contact_mobile1') ? ' is-invalid' : '' }}" id="contact_mobile1" placeholder="الرقم الاول..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="contact_mobile2">رقم جهة الاتصال الشخص الثاني </label>
                <input type="text" name ="contact_mobile2" class="form-control{{ $errors->has('contact_mobile2') ? ' is-invalid' : '' }}" id="contact_mobile2" placeholder="الرقم الثاني..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="lat">احداثيات </label>
                <input type="text" name ="lat" class="form-control{{ $errors->has('lat') ? ' is-invalid' : '' }}" id="lat" placeholder="احداثيات x..">
            </div>
            <div class="form-group">
                <label class="text-lg" for="Ing">احداثيات </label>
                <input type="text" name ="Ing" class="form-control{{ $errors->has('Ing') ? ' is-invalid' : '' }}" id="Ing" placeholder="احداثيات y..">
            </div>
            <div class="form-group">
                <label class="form-label text-lg" for="estate_media" >اضافة مرفق التصوير عن العقار</label>
                <br>
                <input type="file"  id="estate_media" name="estate_media"/>
            </div>
            <div class="form-group">
                <label class="form-label text-lg" for="neighborhood_media">اضافة مرفق التصوير عن الجيران</label>
                <br>
                <input type="file"  id="neighborhood_media" name="neighborhood_media"/>
            </div>


            <div class ="form-group pt-3">
                <button type="submit" class="btn btn-primary">تم</button>
            </div>
        </form>
    </div>


    <!-- Page Heading -->

@endsection
