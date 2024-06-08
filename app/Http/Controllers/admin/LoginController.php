<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //show admin login page
    public function index(){
        return view('admin.login');
    }

    //method ini untuk authenticate admin user
    public function authenticate(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()){
            if(Auth::guard('admin')->attempt(['email'=> $request->email,'password' => $request->password])){

                if(Auth::guard('admin')->user()->role != "admin"){
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('error', 'You are not autorized to access this page.');

                }

                return redirect()->route('admin.dashboard');

            }else{
                return redirect()->route('admin.login')->with('error', 'Either email and password is incorect.');
            }

        } else {
            return redirect()->route('admin.login')
            ->withInput()
            ->withErrors($validator);
        }
    }

    //method untuk logout adnin user
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }


}
