@extends('backend.layout.template')

@section('page-title')
<title>Manage All District | Ecommerce Platform</title>
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
                    <h5 class="mb-0">Manage All District</h5>
                </div>
                <div class="dropdown options ms-auto">
                    <a href="{{route('district.trash')}}"><span class="btn btn-primary btn-sm">View Trash</span></a>

                </div>
            </div>
        </div>
        <div class="card-body">
            @if($districts->count()>0)
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped table-hover table-border" id="bdata_table">
                    <thead class="table-dark">
                        <tr>
                            <th>#Sr.</th>
                            <th>District Name</th>
                            <th>Division Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        <!-- For Parent Category -->
                        @foreach($districts as $district)
                        <tr>
                            <td>{{$i;}}</td>
                            <td>{{$district->name}}</td>
                            <td>{{$district->division->name}}</td>
                            <td>
                                @if($district->status == 1)
                                <span class="badge bg-primary">Active</span>
                                @elseif($district->status == 0)
                                <span class="badge bg-warning">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-bar">
                                    <ul>
                                        <li><a href="{{route('district.edit', $district->id)}}"><i class="lni lni-pencil-alt text-success"></i></a></li>
                                        <li><a href="" data-bs-toggle="modal" data-bs-target="#deleteDistrict{{ $district->id }}"><i class="lni lni-trash text-danger"></i></a></li>
                                    </ul>
                                </div>
                            </td>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteDistrict{{ $district->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete this Division?</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div class="action-bar">
                                                <ul>
                                                    <li>
                                                        <form action="{{route('district.destroy',$district->id)}}" method="POST">
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