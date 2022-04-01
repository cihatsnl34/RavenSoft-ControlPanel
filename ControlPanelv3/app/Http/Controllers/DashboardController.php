<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('partner')){
            return view('partnerdas');
        }
        else if(Auth::user()->hasRole('company')){
            return view('companydas');
        }
    }   
    public function myprofile()
    {
        return view('myprofile');
    }
}
