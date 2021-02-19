@extends('layouts.adminBase')
@section('content')
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card border-0 shadow-none bg-transparent">
                <div class="card-header bg-transparent row ">
                    <div class="col-lg-3 pt-2">
                        <h4 class="h5 text-center text-dark">Manage Employee</h4>
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
                                        <a  class="btn btn-primary btn-sm" title="edit" data-bs-toggle="modal" data-bs-target="#edit_{{ $employee->id }}"><i class="fa fa-edit"></i></a>
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
  @foreach ($employees as $employee)
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
                    <h6 class="text-danger">Document 1</h6>
                    <img src="{{ asset('employee_document/'.$employee->doc_3) }}" style="height: 250px; width:100%;" alt="">
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  @foreach ($employees as $employee)
  <div class="modal fade" id="edit_{{ $employee->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-0">
      <div class="modal-content rounded-0 border-0">
        <div class="modal-header border-0">
          <h5 class="modal-title text-uppercase " id="exampleModalLabel">Update Records</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
            <form action="{{ route('edit',['id'=>$employee->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control rounded-0 shadow-none" value="{{ $employee->name }}">
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="">Contact</label>
                        <input type="text" name="contact" class="form-control rounded-0 shadow-none" value="{{ $employee->contact }}">
                    </div>
                    <div class="mb-3 col">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control rounded-0 shadow-none" value="{{ $employee->email }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="">Designation</label>
                    <select name="city" class="form-control rounded-0 shadow-none" >
                        <option value="" selected hidden disabled>Select Designation</option>
                        @if ($employee->designation == 'web developer')
                        <option value="Web developer" selected>Web developer</option>
                        <option value="Assistant manager">Assistant manager</option>
                        <option value="Android Developer">Android Developer</option>
                        @elseif($employee->designation == 'Android Developer')
                        <option value="Web developer">Web developer</option>
                        <option value="Assistant manager">Assistant manager</option>
                        <option value="Android Developer" selected>Android Developer</option>
                        @elseif($employee->designation == 'assistant manager')
                        <option value="Web developer">Web developer</option>
                        <option value="Assistant manager" selected>Assistant manager</option>
                        <option value="Android Developer">Android Developer</option>
                        @else
                        <option value="Web developer">Web developer</option>
                        <option value="Assistant manager">Assistant manager</option>
                        <option value="Android Developer">Android Developer</option>
                        @endif
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <textarea name="address"  class="form-control rounded-0 shadow-none" id="" cols="30" rows="5">{{ $employee->address}}</textarea>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="">City</label>
                        <select name="city" class="form-control rounded-0 shadow-none" required>
                            <option value="" selected hidden disabled>Select City</option>
                            <option value="purnea">Purnea</option>
                            <option value="patna">patna</option>
                        </select>
                    </div>
                    <div class="mb-3 col">
                        <label for="">State</label>
                        <select name="state" class="form-control rounded-0 shadow-none" required>
                            <option value="" selected hidden disabled>Select State</option>
                            <option value="bihar">Bihar</option>
                            <option value="delhi">Delhi</option>
                        </select>
                    </div>
                    <div class="mb-3 col">
                        <label for="">Pincode</label>
                        <input type="number" name="pincode" value="{{ $employee->pincode }}" id="" class="form-control shadow-none" value="{{ old("pincode") }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><img src="{{ asset('employee_photo/'.$employee->doc_1) }}" style="height:70px; width:70px;" class="img-fluid rounded-circle"></div>
                    <div class="mb-3 col">
                        <label for="">Photo <span class="text-danger">*</span></label>
                        <input type="file" name="doc_1" class="form-control rounded-0 shadow-none">
                    </div>
                </div>
                
                <div class="mb-3">
                    <input type="submit" value="Update" class="btn btn-info w-100 px-4 rounded-0 float-end">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
<!-- JavaScript Bundle with Popper -->
@endsection