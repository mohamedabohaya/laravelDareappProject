<?php

namespace App\Http\Controllers;


use App\Models\Areas;
use App\Models\cities;
use App\Models\Currencies;
use App\Models\Estates;
use App\Models\Finishings;
use App\Models\Notifications;
use App\Models\Offers;
use App\Models\Tickets;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Countries;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function estate()
    {
        $cities = cities::all();
        $area = Areas::all();
        $currency = Currencies::all();
        return view('estate' ,compact('cities','area','currency'));
    }
    public function country()
    {
        return view('country');
    }

    public function city()
    {
        $countries = Countries::all();
        return view('city' ,compact('countries'));
    }

    public function area()
    {
        $cities = cities::all();
        return view('area', compact('cities'));
    }

    public function currency()
    {
        return view('currency');
    }

    public function notification()
    {
        $user = User::all();
        return view('notification' , compact('user'));
    }
    public function offer()
    {
        $estate = Estates::all();
        return view('offer',compact('estate'));
    }
    public function ticket()
    {
        return view('ticket');
    }

    public function store_country(Request $request){
            $this->validate($request,[
                'name_of_country' =>'required'
            ]);

            $country = new Countries();
            $country->name_of_country = $request->name_of_country;
            $country->save();

            return back()->withInput();

    }

    public function store_city(Request $request){
        $this->validate($request,[
            'name_of_city' =>'required',
            'name_of_country' => 'required',
        ]);

        $city = new cities();
        $city->name_of_city =$request->name_of_city;
        $city->country_id =$request->name_of_country ;
        $city->save();

        return back()->withInput();

    }

    public function store_area(Request $request){
        $this->validate($request,[
            'name_of_area' => 'required',
            'name_of_country' => 'required',
        ]);

        $area = new Areas();
        $area->name_of_area = $request->name_of_area;
        $area->city_id = $request->name_of_country;
        $area->save();

        return back()->withInput();
    }

    public function store_currency(Request $request){
        $this->validate($request ,[
            'name_of_currency' => 'required',
        ]);

        $currency = new Currencies();
        $currency->name_of_currency = $request->name_of_currency;
        $currency->save();

        return back()->withInput();

    }



    public function store_estate(Request $request){
        $this->validate($request,[
            'estate_type' => 'required',
            'street' => 'required',
            'estate_area' => 'required',
            'price' => 'required',
            'land_area' => 'required',
            'building_area' => 'required',
            'building_age' => 'required',
            'apartment_area' => 'required',
            'apartment_floor' => 'required',
            'land_interface' => 'required',
            'shop_length_area' => 'required',
            'shop_width_area' => 'required',
            'room_no' => 'required',
            'bathroom_no' => 'required',
            'halls_no' => 'required',
            'floors_no' => 'required',
            'description' => 'required',
            'has_garage' => 'required',
            'has_well' => 'required',
            'has_public_street_view' => 'required',
            'has_sea_view' => 'required',
            'elementary_schools_no' => 'required',
            'preparatory_schools_no' => 'required',
            'secondary_schools_no' => 'required',
            'kindergarten_no' => 'required',
            'pharmacy_no' => 'required',
            'mosque_no' => 'required',
            'hospital_no' => 'required',
            'bakery_no' => 'required',
            'mall_no' => 'required',
            'is_residential' => 'required',
            'is_agricultural' => 'required',
            'is_commercial' => 'required',
            'is_industrial' => 'required',
            'is_taboo' => 'required',
            'has_attic' => 'required',
            'is_payment_type_cash' => 'required',
            'is_payment_type_installment' => 'required',
            'is_payment_type_switching' => 'required',
            'contact_name' => 'required',
            'contact_identity' => 'required',
            'contact_mobile1' => 'required',
            'contact_mobile2' => 'required',
            'lat' => 'required',
            'Ing' => 'required',
            'estate_media' => 'required',
            'neighborhood_media' => 'required',
            'name_of_country' => 'required',
        ]);

            $estate = new Estates();
            $estate->estate_type = $request->estate_type;
            $estate->city_id = $request->name_of_country;
            $estate->area_id = $request->name_of_country;
            $estate->street = $request->street;
            $estate->estate_area = $request->estate_area;
            $estate->price = $request->price;
            $estate->currency_id = $request->name_of_country;
            $estate->land_area = $request->land_area;
            $estate->building_area = $request->building_area;
            $estate->building_age = $request->building_age;
            $estate->apartment_area = $request->apartment_area;
            $estate->apartment_floor = $request->apartment_floor;
            $estate->land_interface = $request->land_interface;
            $estate->shop_length_area = $request->shop_length_area;
            $estate->shop_width_area = $request->shop_width_area;
            $estate->room_no = $request->room_no;
            $estate->bathroom_no = $request->bathroom_no;
            $estate->halls_no = $request->halls_no;
            $estate->floors_no = $request->floors_no;
            $estate->description = $request->description;
            $estate->has_garage = $request->has_garage;
            $estate->has_well = $request->has_well;
            $estate->has_public_street_view = $request->has_public_street_view;
            $estate->has_sea_view = $request->has_sea_view;
            $estate->elementary_schools_no = $request->elementary_schools_no;
            $estate->preparatory_schools_no = $request->preparatory_schools_no;
            $estate->secondary_schools_no = $request->secondary_schools_no;
            $estate->kindergarten_no = $request->kindergarten_no;
            $estate->pharmacy_no = $request->pharmacy_no;
            $estate->mosque_no = $request->mosque_no;
            $estate->hospital_no = $request->hospital_no;
            $estate->bakery_no = $request->bakery_no;
            $estate->mall_no = $request->mall_no;
            $estate->is_residential = $request->is_residential;
            $estate->is_agricultural = $request->is_agricultural;
            $estate->is_commercial = $request->is_commercial;
            $estate->is_industrial = $request->is_industrial;
            $estate->is_taboo = $request->is_taboo;
            $estate->has_attic = $request->has_attic;
            $estate->is_payment_type_cash = $request->is_payment_type_cash;
            $estate->is_payment_type_installment = $request->is_payment_type_installment;
            $estate->is_payment_type_switching = $request->is_payment_type_switching;
            $estate->contact_name = $request->contact_name;
            $estate->contact_identity = $request->contact_identity;
            $estate->contact_mobile1 = $request->contact_mobile1;
            $estate->contact_mobile2 = $request->contact_mobile2;
            $estate->lat = $request->lat;
            $estate->Ing = $request->Ing;
            if($request->hasFile('estate_media')){
                $fileName = time().'.'.$request->estate_media->extension();
                $estate->estate_media =  $request->estate_media->move(public_path('uploads/media'), $fileName);
            }
            if($request->hasFile('neighborhood_media')){
                $fileName = time().'.'.$request->neighborhood_media->extension();
                $estate->neighborhood_media = $request->neighborhood_media->move(public_path('uploads/media'), $fileName);
            }
         $estate->save();
         return back()->withInput();

    }

         public function store_ticket(Request $request){
            $this->validate($request,[
                'title' => 'required',
                'message' => 'required',
                'attachment' => 'required',
            ]);

            $ticket = new Tickets();
            $ticket->title = $request->title;
            $ticket->message = $request->message;
             if($request->hasFile('attachment')){
                 $fileName = time().'.'.$request->attachment->extension();
                 $ticket->attachment =  $request->attachment->move(public_path('uploads/media'), $fileName);
             }
            $ticket->save();
            return back()->withInput();
         }

        public function store_offer(Request $request){
            $this->validate($request,[
                'price'=> 'required',
                'expire_at'=> 'required',
                'type'=> 'required',
                'name_of_country'=> 'required',
            ]);

            $offer = new Offers();
            $offer->price = $request->price;
            $offer->expire_at = $request->expire_at;
            $offer->type = $request->type;
            $offer->estate_id = $request->name_of_country;
            $offer->save();

            return back()->withInput();
        }

        public function store_notify(Request $request){

            $this->validate($request,[
                'title' => 'required',
                'message' => 'required',
                'attachment' => 'required',
                'name_of_country' => 'required',
            ]);

            $notify = new Notifications();
            $notify->title = $request->title;
            $notify->message = $request->message;
            $notify->user_id = $request->name_of_country;
            if($request->hasFile('attachment')){
                $fileName = time().'.'.$request->attachment->extension();
                $notify->attachment = $request->attachment->move(public_path('uploads/media'), $fileName);
            }
            $notify->save();

            return back()->withInput();


        }

        public function show_estate(){
            $estate = Estates::all();
            return view('estateData',compact('estate'));
        }

        public function delete_estate($id){
            Estates::query()->find($id)->delete();
            return back()->withInput();
        }

        public function search_estate(Request $request){
            $search = $request->get('search');
            if($search){
                $estate = Estates::where('contact_name','like',"%{$search}%")->get();
            }else{
                $estate =Estates::query()->get();
            }
            return view('estateData' , [
                "estate" => $estate,
            ]);
        }

        public function show_estate_details($id){
            $estate =  Estates::findOrFail($id);
            if ($estate){}else{
                die("it's deleted");
            }
            $estates = Estates::all();
            //to connect models
            $city = Estates::with('city')->find($id);
            $area = Estates::with('area')->find($id);
            $currency = Estates::with('currency')->find($id);
            return view('estateDetails',[
                "estates" => $estates ,
                "estate" => $estate ,
                "city" => $city ,
                "area" => $area,
                "currency" => $currency,
            ]);
        }


}
