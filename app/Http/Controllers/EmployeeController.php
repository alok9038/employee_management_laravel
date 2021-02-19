<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
