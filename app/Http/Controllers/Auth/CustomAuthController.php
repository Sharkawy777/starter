<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class CustomAuthController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:admin');
    }

    public function adult()
    {
        return view('customAuth.index');
    }

    public function site()
    {
        return view('site');
    }

    public function admin()
    {
        return view('admin');
    }

    public function adminLogin()
    {
        return view('auth.adminLogin');
    }

    public function checkAdminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
//        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin');
        } else {
            return back()->withInput($request->only('email'));
        }
    }
}
