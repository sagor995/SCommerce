@extends('backend.layout.template')

@section('page-title')
<title>Update Brand | Ecommerce Platform</title>
@endsection

@section('body-css')

@endsection

@section('body-content')
<div class="page-content">
    <div class="card radius-10 w-100">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Add New Brand</h5>
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
            <form action="{{route('brand.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Brand Name" value="{{$brand->name}}" autocomplete="off" required />
                        </div>
                        <div class="mb-3">
                            <label>Status:</label>
                            <select class="form-select mb-3" name="status" aria-label="Default select example" required>
                                <option value="">Please select the status</option>
                                <option value="1" @if($brand->status == 1) selected @endif>Active</option>
                                <option value="0" @if($brand->status == 0) selected @endif>Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Logo Image</label>
                            <input class="form-control" type="file" name="image" id="formFile">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label>Name:</label>
                            <textarea name="description" class="form-control" placeholder="Write Description" rows="5">{{$brand->description}}</textarea>
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