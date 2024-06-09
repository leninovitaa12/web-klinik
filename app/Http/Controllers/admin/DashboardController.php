<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    //DASHBOARD PAGE UNTUK ADMIN
    public function index(){
        return view('admin.dashboard');
    }

    public function presensi() : View {
        return view('admin.presensi');
    }
}
