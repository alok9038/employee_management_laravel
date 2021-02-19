<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data['count'] = Employee::get();
        return view('admin.dashboard',$data);

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
        ]);

        $doc_1 = time() . "." . $request->doc_1->getClientOriginalName();
        $request->doc_1->move(public_path("employee_photo"),$doc_1);

        $doc_2 = time() . "." . $request->doc_2->getClientOriginalName();
        $request->doc_2->move(public_path("employee_document"),$doc_2);

        $doc_3 = time() . "." . $request->doc_3->getClientOriginalName();
        $request->doc_3->move(public_path("employee_document"),$doc_3);

        if($request->hasFile('doc_4')){ 
            $doc_4 = time() . "." . $request->doc_4->getClientOriginalName();
            $request->doc_4->move(public_path("employee_document"),$doc_4);
        }
        if($request->hasFile('doc_5')){ 
            $doc_5 = time() . "." . $request->doc_5->getClientOriginalName();
            $request->doc_5->move(public_path("employee_document"),$doc_5);
        }
        

        

        $employee = new Employee();
        $employee->name         =   $request->name;
        $employee->contact      =   $request->contact;
        $employee->email        =   $request->email;
        $employee->designation  =   $request->designation;
        $employee->address      =   $request->address;
        $employee->city         =   $request->city;
        $employee->state        =   $request->state;
        $employee->pincode      =   $request->pincode;
        $employee->doc_1        =   $doc_1;
        $employee->doc_2        =   $doc_2;
        $employee->doc_3        =   $doc_3;
        if($request->hasFile('doc_4')){ 
            $employee->doc_4        =   $doc_4;
        }
        if($request->hasFile('doc_5')){ 
            $employee->doc_5       =   $doc_5;
        }
        
        $employee->save();
        
        return redirect()->route('manage.employee');

    }
    public function manage_employee(){
        $data['employees'] = Employee::orderBy('id','desc')->get();
        return view('admin.manage_employee',$data);
    }

    public function delete($id){
        $id;
        Employee::where(['id'=>$id])->delete();
        return redirect()->back();

    }  
    
    public function edit(Request $request, $id){

        if($request->hasFile('doc_1')){ 
            $doc_1 = time() . "." . $request->doc_1->getClientOriginalName();
            $request->doc_1->move(public_path("employee_document"),$doc_1);
        }


        $emp_update = Employee::find($id);
        $emp_update->name = $request->name;
        $emp_update->contact = $request->contact;
        $emp_update->email = $request->email;
        $emp_update->designation = $request->designation;
        $emp_update->address = $request->address;
        $emp_update->state = $request->state;
        $emp_update->city = $request->city;
        $emp_update->pincode = $request->pincode;
        if($request->hasFile('doc_1')){ 
            $employee->doc_1       =   $doc_1;
        }
        $emp_update->save();
        
        return redirect()->back();
    }
}
