<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
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
    public function store_employee(Request $request){
        $request->validate([
            'name'          =>      'required',
            'contact'       =>      'required',
            'email'         =>      'required',
            'designation'   =>      'required',
            'address'       =>      'required',
            'city'          =>      'required',
            'state'         =>      'required',
            'pincode'       =>      'required',
            'doc_1'         =>      'required',
            'doc_2'         =>      'required',
            'doc_3'         =>      'required',
            'doc_4'         =>      'required',
        ]);
    }
    public function manage_employee(){
        return view('admin.manage_employee');
    }

    
}
