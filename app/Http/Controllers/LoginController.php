<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //LOGIN UNTUK CLIENT
    public function index(){
        return view('login');
    }


    //Method untuk Authenticate user
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->passes()){

            if(Auth::attempt(['email'=> $request->email, 'password' => $request->password])){
                return redirect()->route('account.dashboard');
            }else{
                return redirect()->route('account.login')->with('error','Email dan password salah.');
            }

        } else {
            return redirect()->route('account.login')
            ->withInput()
            ->withErrors($validator);
        }
    }

    //Menampilkan Halaman register
    public function register(){
        return view('register');
    }

    public function processRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'name' => 'required',
            'password_confirmation' => 'required',
        ]);

        if($validator->passes()){

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'client';
            $user->save();

            return redirect()->route('account.login')->with('success', 'Anda telah berhasil Register.');
        } else {
            return redirect()->route('account.register')
            ->withInput()
            ->withErrors($validator);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }
}
