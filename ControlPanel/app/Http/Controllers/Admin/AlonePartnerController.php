<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlonePartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerList = DB::table('partners')->where('status', '=', 0)
        ->where('companyId','=',0)->get();
        #$companyList = DB::select('select * from companies where');
        return view('admin.partner.Apartner_show',['partnerList'=>$partnerList]);
    }
    public function approve(Partner $partner, $id)
    {
        $PartnerData = Partner::find($id);
        $PartnerData->status = 1;
        $PartnerData->save(); 
        
        return redirect()->route('admin.admin_Apartner_show');
    }
    public function destroy(Partner $partner,$id)
    {
        DB::table('partners')->where('id', '=', $id)->delete();
        return redirect()->route('admin.admin_Apartner_show');
    }
}
