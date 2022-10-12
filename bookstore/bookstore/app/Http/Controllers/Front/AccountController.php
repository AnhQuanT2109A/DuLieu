<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function login(){
        return view('front.account.login');
    }

    public function checkLogin(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 2,
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            return 'success';
//            return redirect('');
        } else{
            return 'Fail';
//            return back()->with('notification', 'Error:email or password');
        }
    }
}
