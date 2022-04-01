<?php

namespace App\Http\Controllers\Partner\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PartnerLoginRequest;
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
        return view('partner.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PartnerLoginRequest $request)
    {
       
        
        
        $email = $request->input('email');
        $user = DB::select('select * from partners where email = ?', [$email])[0];
        if ( $user->status==0) {
            return view('PartnerloginFail');
        }
        else
        {   
            $request->authenticate();
            $request->session()->regenerate();
            session(['username' =>$user->name]);
            session(['id' => $user->id]);
            session(['country' => $user->country]);
            session(['status' => $user->status]);
          return redirect()->intended(RouteServiceProvider::PARTNER_HOME);
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
        Auth::guard('partner')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
