<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
     }


     public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::guard('accounts')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('home');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->with('status', __('Invalid email or password'));
    }
}
