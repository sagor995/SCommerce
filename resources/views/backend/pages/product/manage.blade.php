@extends('backend.layout.template')

@section('page-title')
<title>Manage All Products | Ecommerce Platform</title>
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
                    <h5 class="mb-0">Manage All Products</h5>
                </div>
                <div class="dropdown options ms-auto">
                    <a href="{{route('product.trash')}}"><span class="btn btn-primary btn-sm">View Trash</span></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if($products->count()>0)
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped table-hover table-border" id="bdata_table">
                    <thead class="table-dark">
                        <tr>
                            <th>#Sr.</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Regular Price</th>
                            <th>Offer Price</th>
                            <th>Stock Quantity</th>
                            <th>Is Featured</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        <!-- For Parent Category -->
                        @foreach($products as $product)
                        <tr>
                            <td>{{$i;}}</td>
                            <td>
                                Image
                            </td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->brand->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->regular_price}} BDT</td>
                            <td>
                                @if(!is_null($product->offer_price))
                                    {{ $product->offer_price }} BDT
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{$product->quantity}} Pcs</td>
                            <td>
                                @if($product->is_featured == 1)
                                <span class="badge bg-info">On Sale</span>
                                @elseif($product->is_featured == 0)
                                <span class="badge bg-primary">Regular Product</span>
                                @endif
                            </td>
                            <td>
                                @if($product->status == 1)
                                <span class="badge bg-success">Active</span>
                                @elseif($product->status == 0)
                                <span class="badge bg-warning">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-bar">
                                    <ul>
                                        <li><a href="{{route('product.edit', $product->id)}}"><i class="lni lni-pencil-alt text-success"></i></a></li>
                                        <li><a href="" data-bs-toggle="modal" data-bs-target="#deleteProduct{{ $product->id }}"><i class="lni lni-trash text-danger"></i></a></li>
                                    </ul>
                                </div>
                            </td>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteProduct{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you really want to delete this Product?</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div class="action-bar">
                                                <ul>
                                                    <li>
                                                        <form action="{{route('product.destroy',$product->id)}}" method="POST">
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