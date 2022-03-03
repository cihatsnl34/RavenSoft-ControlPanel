<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class BuyerRegisterController extends Controller
{
    public function store(Request $request)
    {
        $currentTime = Carbon::now();
        DB::table('buyers')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'created_at'=>$currentTime
        ]);
        return redirect()->route('buyer.login');
    }
    public function asd(Request $request){

    }
}
