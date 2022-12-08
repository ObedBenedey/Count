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

    public function edit($id) {
    
        $profile = Profile::where('id', $id)->first();
        // dd("ajdsa");
      return view('profile.edit', ["profile" => $profile]);
    }

    public function data(Request $request) { 
        try {
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
                    Log::debug($data);
                    return redirect('/profile')->with('success', 'Nuevo menu creado!');
        } catch(\Throwable $th) {
        Log::debug($th->getMessage());
        } 
              }
}
