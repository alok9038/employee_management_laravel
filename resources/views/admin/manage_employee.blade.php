@extends('layouts.adminBase')
@section('content')
    <div class="row">
        <div class="col-lg-12 mx-auto">
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
                            <th>Id</th>
                            <th>Image</th>
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
                                <td><img src="{{ asset('employee_photo/'.$employee->doc_1) }}" alt="" style="height: 40px; width:40px; border-radius:50%;" class="img-fluid"></td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->contact }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->designation }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->city }}</td>
                                <td>{{ $employee->state }}</td>
                                <td class="">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info btn-sm text-white" title="view" data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $employee->id }}"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('delete',['id'=>$employee->id]) }}" class="btn btn-primary btn-sm" title="edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('delete',['id'=>$employee->id]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger rounded-0 btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal_{{ $employee->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-0">
      <div class="modal-content rounded-0 border-0">
        <div class="modal-header border-0">
          <h5 class="modal-title text-uppercase " id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
            <div class="row">
                <div class="col-lg-7 mb-3">
                    <img src="{{ asset('employee_photo/'.$employee->doc_1) }}" alt="" style="height: auto; width:100%; border-radius:50px;" class="img-fluid mx-auto">
                </div>
                <div class="col-lg-5">
                    <h6 class="text-capitalize">{{ $employee->name }}</h6>
                    <h6 class="text-capitalize">{{ $employee->contact }}</h6>
                    <h6 class="text-capitalize">{{ $employee->email }}</h6>
                    <h6 class="text-capitalize">{{ $employee->address }}</h6>
                    <h6 class="text-capitalize">{{ $employee->city }}, {{ $employee->state }}</h6>
                    <h6 class="text-capitalize">{{ $employee->designation }}</h6>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<!-- JavaScript Bundle with Popper -->
@endsection