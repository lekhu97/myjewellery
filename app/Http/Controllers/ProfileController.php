<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Order;
use Auth;
class ProfileController extends Controller
{
	public function __construct() {
		// $this->middleware('auth');
	}
    public function index($id) {
     
    	$profile = User::find($id)->profile;

    	$user = User::find($id);
    	
        $orders = Order::where('user_name',Auth::user()->name)->get();
    	return view('profile.profile',compact(['profile','user','orders']));
    }

    public function edit($id) {
        $user = Profile::find($id)->user;
        $profile = Profile::find($id);
        return view('profile.profile_edit',compact(['user','profile']));
    }

    public function update(Request $request) {
    
          $data = Profile::where('user_id', $request->user_id)
              ->update([
                'address' => $request->address,
                'phone' => $request->phone,
                'slug' => $request->slug,
              ]);

           if ($data) {
             return back()->with('message','Profile Update');
           }


    }

}
