<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller{
    public function index() {
        $profile = Profile::all();

        return view('profile.index', ["profile" => $profile]);
    }

    public function create() {
        return view('profile.create');
    }
}
