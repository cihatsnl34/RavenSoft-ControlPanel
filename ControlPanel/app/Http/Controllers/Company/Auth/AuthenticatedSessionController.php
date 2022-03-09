<?php

namespace App\Http\Controllers\Company\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CompanyLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('company.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CompanyLoginRequest $request)
    {
        $request->authenticate();
        $email = $request->input('email');
        $password = $request->input('password');
        $user = DB::select('select * from companies where email = ?', [$email])[0];

        
        if ( $user->status==0) {
            return view('loginFail');
        }
        else
        {   
            
            $request->session()->regenerate();
            session(['username' =>$user->name]);
            session(['id' => $user->id]);
            session(['country' => $user->country]);
            session(['status' => $user->status]);
          return redirect()->intended(RouteServiceProvider::COMPANY_HOME);
        }
        
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('company')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
