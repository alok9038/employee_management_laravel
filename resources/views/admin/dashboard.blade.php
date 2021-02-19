@extends('layouts.adminBase')

@section('content')
<div class="container p-0">
    <div class="card border-0" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)">
        <div class="card-body">
            <h6 class="h3 fw-light">Welcome to Employee Management System Admin Pannel</h6>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus tenetur placeat perspiciatis voluptatibus, ipsam facere necessitatibus sunt animi beatae, optio veritatis laboriosam vel adipisci nihil tempora at voluptatem debitis id.</p>
        </div>
    </div>
</div>
    <div class="row mt-4 row-cols-1 row-cols-lg-3 row-cols-md-3 row-cols-sm-2">
        <div class="col">
            <div class="card border-0" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)">
                <div class="card-body row">
                    <div class="col">
                        <h4 class="fw-light">Total Employee</h4>
                        <p>{{ count($count) }}</p>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-2x mt-4 text-info me-2 fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection