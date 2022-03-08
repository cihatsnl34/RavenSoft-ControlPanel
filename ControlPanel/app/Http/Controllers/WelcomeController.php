<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Company;
class WelcomeController extends Controller
{
   
    public function welcome(Request $request){
        $country=$request->input('country');
        session(['country' =>$country]);
        return redirect()->route('company_select');
    }

    
    public function create(){
        $companyList = Company::select('*')
                ->where('status', '=', 1)
                ->where('country', '=', session('country')) 
                ->get();
       // DB::table('companies')->where('status', '=', 1)->get();
        return view('company_select',['companyList'=>$companyList]);
    }
    public function store(Request $request){
        $select=$request->input('select');
        if($select==0)
        {
            return redirect()->route('company.login');
        }
        if($select==1)
        {
            return redirect()->route('company_register');
        }
        if($select==2)
        {
            return redirect()->route('partner.login');
        }
        if($select==3)
        {
            return redirect()->route('partner_registerList');
        }
        else
        {
            return redirect()->route('company_select');
        }
    }
}
