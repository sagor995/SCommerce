@extends('backend.layout.template')

@section('page-title')
<title>Manage All Category | Ecommerce Platform</title>
@endsection

@section('body-css')
<link href="{{asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection


@section('body-content')
<div class="page-content">
    <div class="card radius-10 w-100">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Manage All Categories</h5>
                </div>
                <div class="dropdown options ms-auto">
                    <a href="{{route('category.manage')}}"><span class="btn btn-primary btn-sm">View Active Categories</span></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if($categories->count()>0)
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped table-hover table-border" id="bdata_table">
                    <thead class="table-dark">
                        <tr>
                            <th>#Sr.</th>
                            <th>Image</th>
                            <th>Category Name</th>
                            <th>Parent / Child</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$i;}}</td>
                            <td>
                                @if(!is_null($category->image))
                                <img src="{{asset('images/category/'.$category->image)}}" width="35px" />
                                @else
                                N/A
                                @endif
                            </td>
                            <td>{{$category->name}}</td>
                            <td>
                                @if($category->is_parent == 0 )
                                <span class="badge bg-info">Parent Category</span>
                                @endif
                            </td>
                            <td>
                                @if($category->status == 1)
                                <span class="badge bg-primary">Active</span>
                                @elseif($category->status == 0)
                                <span class="badge bg-warning">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-bar">
                                    <ul>
                                        <li><a href="{{route('category.edit', $category->id)}}"><i class="lni lni-pencil-alt text-success"></i></a></li>
                                        <li><a href="" data-bs-toggle="modal" data-bs-target="#deleteCategory{{ $category->id }}"><i class="lni lni-trash text-danger"></i></a></li>
                                    </ul>
                                </div>
                            </td>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you really want to delete this Category?</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div class="action-bar">
                                                <ul>
                                                    <li>
                                                        <form action="{{route('category.destroy',$category->id)}}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Yes</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </tr>
                        @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>

            @else
            <div class="alert alert-info">Sorry! No data found in the System's database.</div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('body-script')
<script src="{{asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

<script>
    $(document).ready(function() {
        var table = $('#bdata_table').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#bdata_table_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection