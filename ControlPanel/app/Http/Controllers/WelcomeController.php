<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public $country;
    public function welcome(Request $request){
        $this->country=$request->input('country');
        
        return view('company_select');
    }
    
}
