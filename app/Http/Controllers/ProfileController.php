<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ProfileController extends Controller{
    public function index() {
        $profile = Profile::all();

        return view('profile.index', ["profile" => $profile]);
    }

    public function create() {
        return view('profile.create');
    }
    public function data(Request $request) {
        Log::debug("w");
        $profile = new Profile();
            $data = $this->validate($request, [
                'first_name'=>'required',
                'last_name'=> 'required',
                'phone_number'=> 'required',
                'age'=> 'required',
                'gender'=> 'required',
                'address'=> 'required',
                'buro'=> 'required',
                'curp'=> 'required',
                'rfc'=> 'required',
                'does_invoice'=> 'required',
                'occupation'=> 'required'
            ]);
    
            $profile->saveProfile($data);
            return redirect('/profile')->with('success', 'Nuevo menu creado!');
      }
}
