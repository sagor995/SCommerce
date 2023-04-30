@extends('backend.layout.template')

@section('page-title')
<title>Manage All Category | Ecommerce Platform</title>
@endsection

@section('body-css')

@endsection


@section('body-content')
<div class="page-content">
    <div class="card radius-10 w-100">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Manage All Brands</h5>
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
            @foreach($brands as $brand)
            {{$brand->name}}
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('body-script')
<script src="{{asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
@endsection