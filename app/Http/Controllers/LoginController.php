<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email,'password' => $request->password ]) OR Auth::attempt(['phone' => $request->email, 'password' => $request->password]) ) {
            $user = User::where('email', $request->email)->orWhere('phone',$request->email)->first();
            $request->session()->put('name', $user->get_name());
            $request->session()->put('email', $user->get_email());
            $request->session()->put('phone', $user->get_phone());
            if ($user->get_type()=="A") {
                $request->session()->put('type','A');
                return redirect()->route('admin_dashboard');
            }elseif($user->get_type()=="F"){
                $request->session()->put('type', 'F');
                return redirect()->route('dashboard');
            }else{
                $request->session()->put('type', 'M');
                return redirect()->route('home');
            }
        }
        return redirect()->back();
    }
}
