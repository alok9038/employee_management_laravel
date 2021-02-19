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
                                <input type="text" id="myInput" class="form-control border-0 shadow-none rounded-0">
                                <div class="input-group-append">
                                    <button class="btn bg-white border-1 shadow-none rounded-0"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <a href="{{ route('add.employee') }}" class="btn btn-info float-end rounded-4">+ Add new Employee</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="table-dark">
                            <th>Employee Id</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Designation</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->contact }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->designation }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->city }}</td>
                                <td>{{ $employee->state }}</td>
                                <td class="btn-group">
                                    <a href="" class="btn btn-info btn-sm text-white" title="view"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('delete',['id'=>$employee->id]) }}" class="btn btn-primary btn-sm" title="edit"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('delete',['id'=>$employee->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger rounded-0 btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection