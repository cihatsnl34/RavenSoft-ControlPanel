<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Packets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packetList = DB::table('packets')->where('companyId', '=', session('id'))->get();
       // $packetList = DB::select('select * from packets ');
        return view('company.packets.packets',['packetList'=>$packetList]);
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
        $currentTime = Carbon::now();
        DB::table('packets')->insert([
            'title' => $request->input('title'),
            'property' => $request->input('property'),
            'packetDuration' => $request->input('packetDuration'),
            'licenseKey' => "DGMOS".uniqid(),
            'price' => $request->input('price'),
            'companyId' => session('id'),
            'country' => session('country'),
            'created_at'=>$currentTime
        ]);
        return redirect()->route('company.company_packets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Packets  $packets
     * @return \Illuminate\Http\Response
     */
    public function show(Packets $packets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Packets  $packets
     * @return \Illuminate\Http\Response
     */
    public function edit(Packets $packets,$id)
    {
        $PacketsData = Packets::find($id);
        $PacketsList = DB::table('packets')->get();
        return view('company.packets.packets_edit', ['PacketsData' => $PacketsData, 'PacketsList' => $PacketsList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Packets  $packets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packets $packets,$id)
    {
        $update = Carbon::now();
        $PacketsData = Packets::find($id);
        $PacketsData->title = $request->input('title');
        $PacketsData->property = $request->input('property');
        $PacketsData->packetDuration = $request->input('packetDuration');

        $PacketsData->price = $request->input('price');
        $PacketsData->updated_at = $update;
        $PacketsData->save();
        return redirect()->route('company.company_packets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Packets  $packets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packets $packets,$id)
    {
        DB::table('packets')->where('id', '=', $id)->delete();
        return redirect()->route('company.company_packets');
    }
}
