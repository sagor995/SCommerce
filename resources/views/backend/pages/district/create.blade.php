@extends('backend.layout.template')

@section('page-title')
<title>Add New District | Ecommerce Platform</title>
@endsection

@section('body-css')

@endsection

@section('body-content')
<div class="page-content">
    <div class="card radius-10 w-100">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Add New District</h5>
                </div>
                <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('district.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="District Name" autocomplete="off" required />
                        </div>
                        <div class="mb-3">
                            <label>Division Name:</label>
                            <select class="form-select mb-3" name="division_id" required>
                                <option>Please select the division</option>
                                @foreach ($divisions as $division)
                                <option value="{{$division->id}}">{{$division->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Status:</label>
                            <select class="form-select mb-3" name="status" aria-label="Default select example" required>
                                <option value="">Please select the status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary px-5" value="Add Now" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('body-script')

@endsection