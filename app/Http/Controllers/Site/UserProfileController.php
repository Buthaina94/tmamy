<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
class UserProfileController extends Controller
{

    public function show($id = null) {

        $data['breadcrumbs'][trans('titles.myProfile')] = '#';

        $id = ($id) ? $id : \Auth::id();

        $data['object'] = User::with('profile')->find($id);

        return View('adforest.profile.index', $data);
    }

    public function update() {
    }

    public function advertisements($type = null) {

        $data['breadcrumbs'][trans('titles.myAds')] = '#';

        // User Get
        $data['object'] = User::with('profile')->find(\Auth::id());

        $objects = Advertisement::query();

        if ($type != null) {
            $objects->whereStatus($type);
        }

        $data['objects'] =  $objects->whereUserId(\Auth::id())->orderBy('id', 'desc')->get();

        return View('adforest.profile.my_ads', $data);
    }

    public function stores($type = null) {

        $data['breadcrumbs'][trans('titles.myStores')] = '#';

        // User Get
        $data['object'] = User::with('profile')->find(\Auth::id());

        $objects = Store::query();

        if ($type != null) {
            $objects->whereStatus($type);
        }

        $data['objects'] =  $objects->whereUserId(\Auth::id())->get();

        return View('adforest.profile.my_stores', $data);

    }

    public function poststores(){
        $cat =  Category::where('parent_id', null)->get();

        $cou =  Country::All();

        return view('adforest.profile.PostStores', compact('cat','cou'));
    }

    public function Postnewstores(Request $request){
        $stors = new Store;

        $Input=$request->all();

        $stors->category_id=$Input['category_id'];

        $filelogo = $request->file('logo_file_name');
        $logoName = time().'.'.$filelogo->getClientOriginalName();
        $request->file('logo_file_name')->move("uploads/",$logoName);


        $stors->title=$Input['title'];
        $stors->company_name=$Input['company_name'];
        $stors->category_id=$Input['category_id'];
        $stors->country_id=$Input['country_id'];
        $stors->user_id=$Input['user_id'];
        $stors->description=$Input['description'];
        $stors->mobile_no=$Input['mobile_no'];
        $stors->phone_no=$Input['phone_no'];
        $stors->start_date=$Input['start_date'];
        $stors->expiry_date=$Input['expiry_date'];
        $stors->address=$Input['address'];
        $stors->email=$Input['email'];
        $stors->url=$Input['url'];
        $stors->pob=$Input['pob'];
        $stors->fax=$Input['fax'];
        $stors->logo_file_name='uploads/'. $logoName;
        $stors->status= 'waiting_approval';






        $user = User::find($Input['user_id']);





        if ($user->Points == 0){
         echo "error";
        }else{
            $flight = User::find($Input['user_id']);
            $flight->Points =  $flight->Points - 1000;

            $flight->save();

            $stors->save();
        }

        return redirect()->back();
    }

    public function deletads($id){


        $Advertisemen = Advertisement::find($id);

        $Advertisemen->delete();

        return redirect()->back();
    }
    public function notifications() {
    }

    public function financials() {

        // Cash
        // Points
    }

    public function promotions() {
    }

    public function messages() {

        // Inbox
        // OutBox
    }

    public function powerAdvs() {
    }

    public function upgrade() {
    }

}
