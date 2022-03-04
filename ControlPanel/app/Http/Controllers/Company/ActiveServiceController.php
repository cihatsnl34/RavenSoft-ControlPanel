<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\PackageBuy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use Carbon\Carbon;
class ActiveServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$partnerList = DB::table('partners')->where('status', '=', 0)->get();
        $PackageBuyList = DB::table('package_buys')->where('companyId', '=', session('id'))->get();
        #$companyList = DB::select('select * from companies where');
        return view('company.activeService.activeService_show',['PackageBuyList'=>$PackageBuyList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageBuy  $packageBuy
     * @return \Illuminate\Http\Response
     */
    public function show(PackageBuy $packageBuy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageBuy  $packageBuy
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageBuy $packageBuy,$id)
    {
        $PackegeBuyData = PackageBuy::find($id);
        $PackageBuyList = DB::table('package_buys')->where('companyId', '=', session('id'))->get();
        return view('company.activeService.activeService_edit', ['PackegeBuyData' => $PackegeBuyData, 'PackageBuyList' => $PackageBuyList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PackageBuy  $packageBuy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageBuy $packageBuy,$id)
    {
        $update = Carbon::now();
        $PackageBuyData = PackageBuy::find($id);
        $PackageBuyData->buyerName = $request->input('buyerName');
        $PackageBuyData->email = $request->input('email');
        $PackageBuyData->phone = $request->input('phone');
        $PackageBuyData->packageTitle = $request->input('packageTitle');
        $PackageBuyData->packetDuration = $request->input('packetDuration');
        $PackageBuyData->licenseKey = $request->input('licenseKey');
        $PackageBuyData->price = $request->input('price');
        $PackageBuyData->created_at = $request->input('created_at');
        $PackageBuyData->updated_at = $update;
        $PackageBuyData->save();
        return redirect()->route('company.activeService_show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageBuy  $packageBuy
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageBuy $packageBuy,$id)
    {
        DB::table('package_buys')->where('id', '=', $id)->delete();
        return redirect()->route('company.activeService_show');
    }
}
