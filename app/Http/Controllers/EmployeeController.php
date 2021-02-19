<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function add_employee(){
        return view('admin.add_employee');
    }
    public function manage_employee(){
        return view('admin.manage_employee');
    }

    
}
