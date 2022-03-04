<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Partner;
use App\Models\Packets;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
   {
    $packetList = DB::table('packets')->where('country', '=', session('country'))->get();
    return view('partner.index',['packetList'=>$packetList]);
   }
   public function store(Packets $packets,Partner $partner,$id)
    {
        $PartnerId=session('id');
        $BuyerData = Partner::find($PartnerId);
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
        return redirect()->route('partner.dashboard');
    }
    public function card(Request $request)
   {
    return view('partner.card');
   }
}
 