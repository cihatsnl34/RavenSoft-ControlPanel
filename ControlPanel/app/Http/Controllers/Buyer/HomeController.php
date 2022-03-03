<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buyer;
use App\Models\Packets;
use Carbon\Carbon;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $packetList = DB::select('select * from packets');
        return view('buyer.index',['packetList'=>$packetList]);
    }
    public function store(Packets $packets,Buyer $buyer,$id)
    {
        $BuyerId=session('id');
        $BuyerData = Buyer::find($BuyerId);
        $PackageData = Packets::find($id);
        $currentTime = Carbon::now();
        DB::table('package_buys')->insert([
            'buyerName' => $BuyerData->name,
            'email' => $BuyerData->email,
            'phone' => $BuyerData->phone,
            'packageTitle' => $PackageData->title,
            'packetDuration' => $PackageData->packetDuration,
            'licenseKey' =>  $PackageData->licenseKey,
            'price' =>  $PackageData->price,
            'created_at'=>$currentTime
        ]);
        return redirect()->route('buyer.dashboard');
    }

}
