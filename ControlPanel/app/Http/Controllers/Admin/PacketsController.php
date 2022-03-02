<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Packets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class PacketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packetList = DB::select('select * from packets');
        return view('admin.packets.packets',['packetList'=>$packetList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'licenseKey' => $request->input('licenseKey'),
            'price' => $request->input('price'),
            'created_at'=>$currentTime
        ]);
        return redirect()->route('admin.admin_packets');
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
    public function edit(Packets $packets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Packets  $packets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packets $packets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Packets  $packets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packets $packets)
    {
        //
    }
}
