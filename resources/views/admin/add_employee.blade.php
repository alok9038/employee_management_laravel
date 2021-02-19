@extends('layouts.adminBase')
@section('content')
    <div class="row">
        <div class="col-lg-11 my-3 mx-auto">
            <div class="card border-0 bg-transparent">
                <div class="card-header bg-transparent border-0 text-muted">
                    <h4 class="fw-light h5">Add Employee</h4>
                </div>
                <div class="card-body bg-white">
                    <form action="{{ route('add.employee.insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Designation</label>
                            <input type="text" name="designation" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <textarea name="address" class="form-control rounded-0 shadow-none" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">City</label>
                            <select name="city" class="form-control rounded-0 shadow-none" >
                                <option value="" selected hidden disabled></option>
                                <option value="">Purnea</option>
                                <option value="">patna</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">State</label>
                            <select name="state" class="form-control rounded-0 shadow-none" >
                                <option value="" selected hidden disabled></option>
                                <option value="">Bihar</option>
                                <option value="">Delhi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Pincode</label>
                            <input type="number" name="pincode" id="" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Photo</label>
                            <input type="file" name="doc_1" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Document type 1</label>
                            <input type="file" name="doc_2" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Document type 2</label>
                            <input type="file" name="doc_3" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Document type 3</label>
                            <input type="file" name="doc_4" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Document type 4</label>
                            <input type="file" name="doc_5" class="form-control rounded-0 shadow-none">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Add Employee" class="btn btn-info w-100 px-4 rounded-0 float-end">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection