@extends('layouts.adminBase')
@section('content')
    <div class="row">
        <div class="col-lg-11 mx-auto">
            <div class="card border-0 shadow-none bg-transparent">
                <div class="card-header bg-transparent row ">
                    <div class="col-lg-3 pt-2">
                        <h4 class="h5 text-center text-dark">Manage employee</h4>
                    </div>
                    <div class="col mb-3">
                        <form action="" method="get">
                            <div class="input-group " style="box-shadow: 0 5px 20px rgba(49, 49, 49, 0.089), 0 4px 6px rgba(0, 0, 0, 0.158)">
                                <input type="search" name="search" id="" class="form-control border-0 shadow-none rounded-0">
                                <div class="input-group-append">
                                    <button class="btn bg-white border-1 shadow-none rounded-0"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <a href="" class="btn btn-info float-end rounded-4">+ Add new Employee</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table  stripped hover">
                        <tr class="table-dark">
                            <th>Employee Id</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Designation</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection