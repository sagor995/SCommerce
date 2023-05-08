@extends('backend.layout.template')

@section('page-title')
<title>Update Division | Ecommerce Platform</title>
@endsection

@section('body-css')

@endsection

@section('body-content')
<div class="page-content">
    <div class="card radius-10 w-100">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Update Division Information</h5>
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
            <form action="{{route('division.update',$division->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Division Name" value="{{$division->name}}" autocomplete="off" required />
                        </div>
                        <div class="mb-3">
                            <label>Priority Number:</label>
                            <input type="text" name="priority_number" class="form-control" placeholder="Priority Name" value="{{$division->priority_number}}" autocomplete="off" required />
                        </div>

                        <div class="mb-3">
                            <label>Status:</label>
                            <select class="form-select mb-3" name="status" aria-label="Default select example" required>
                                <option value="">Please select the status</option>
                                <option value="1" @if($division->status == 1) selected @endif>Active</option>
                                <option value="0" @if($division->status == 0) selected @endif>Inactive</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary px-5" value="Save Changes" />
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