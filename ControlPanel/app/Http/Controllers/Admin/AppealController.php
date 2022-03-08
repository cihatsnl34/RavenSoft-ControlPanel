<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AppealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyList = DB::table('companies')->where('status', '=', 0)->get();
        #$companyList = DB::select('select * from companies where');
        return view('admin.company.company_show',['companyList'=>$companyList]);
    }
    public function currentCompany(){
        $companyList = DB::table('companies')->where('status', '=', 1)->get();
        return view('admin.company.currentCompany_show',['companyList'=>$companyList]);
    }
    public function approve(Company $company, $id)
    {
        $CompanyData = Company::find($id);
        $CompanyData->status = 1;
        $CompanyData->save();
        
        return redirect()->route('admin.admin_company_show');
    }
    public function destroy(Company $company, $id)
    {
        DB::table('companies')->where('id', '=', $id)->delete();
        return redirect()->route('admin.admin_company_show');
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
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    
}
