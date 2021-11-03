<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = 200; 
        
        return view ('admindashboard', compact('data'));
    }
}
