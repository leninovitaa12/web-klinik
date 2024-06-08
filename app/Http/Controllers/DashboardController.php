<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //DASHBOARD PAGE UNTUK CLIENT
    public function index(){
        return view('dashboard');
    }
    //APPOINTMENT
    public function appointment(){
        return view('appointment');
    }
    public function formappointment(){
        return view('form_appointment');
    }
}
