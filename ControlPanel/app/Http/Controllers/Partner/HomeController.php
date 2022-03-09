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
   public function store(Request $request,Packets $packets,Partner $partner,$id)
    {
        $PartnerId=session('id');
        $BuyerData = Partner::find($PartnerId);
        $PackageData = Packets::find($id);
        $currentTime = Carbon::now();
        if($request->radioInline == '0')
        {
            DB::table('package_buys')->insert([
                'buyerName' => $BuyerData->name,
                'email' => $BuyerData->email,
                'phone' => $BuyerData->phone,
                'packageTitle' => $PackageData->title,
                'packetDuration' => $PackageData->packetDuration,
                'licenseKey' =>  $PackageData->licenseKey,
                'price' =>  $PackageData->price,
                'partnerId' =>  $PartnerId,
                'domainAdress' => $request->text,
                'companyId' =>  $PackageData->companyId,
                'created_at'=>$currentTime
            ]);
        }
        if($request->radioInline == '1')
        {
            DB::table('package_buys')->insert([
                'buyerName' => $BuyerData->name,
                'email' => $BuyerData->email,
                'phone' => $BuyerData->phone,
                'packageTitle' => $PackageData->title,
                'packetDuration' => $PackageData->packetDuration,
                'licenseKey' =>  $PackageData->licenseKey,
                'price' =>  $PackageData->price,
                'partnerId' =>  $PartnerId,
                'companyId' =>  $PackageData->companyId,
                'created_at'=>$currentTime
                
            ]);
        }
        return redirect()->route('partner.dashboard');
    }
    public function card(Request $request)
   {
    return view('partner.card');
   }
   public function myPackages()
   {
       $packagesBuyList = DB::table('package_buys')->where('partnerId','=',session('id'))->get();
       #$companyList = DB::select('select * from companies where');
       return view('partner.myPackages.myPackages_show',['packagesBuyList'=>$packagesBuyList]);
   }
}
 