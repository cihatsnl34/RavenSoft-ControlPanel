<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class PartnerRegisterController extends Controller
{
    public function store(Request $request)
    {
        $currentTime = Carbon::now();
        DB::table('partners')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'country' => $request->input('country'),
            'adress' => $request->input('adress'),
            'province' => $request->input('province'),
            'district' => $request->input('district'),
            'postCode' => $request->input('postCode'),
            'created_at'=>$currentTime
        ]);
        return redirect()->route('partner.login');
    }
}
