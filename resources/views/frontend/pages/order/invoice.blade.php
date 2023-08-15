<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-commerce Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/invoice/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/invoice/fonts/font-awesome/css/font-awesome.min.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('frontend/invoice/img/favicon.ico')}}" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/invoice/css/style.css')}}">
</head>

<body>

    <!-- Invoice 1 start -->
    <div class="invoice-1 invoice-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner clearfix">
                        <div class="invoice-info clearfix" id="invoice_wrapper">
                            <div class="invoice-headar">
                                <div class="row g-0">
                                    <div class="col-sm-6">
                                        <div class="invoice-logo">
                                            <!-- logo started -->
                                            <div class="logo">
                                                <img src="{{asset('frontend/invoice/img/logos/logo.png')}}" alt="logo">
                                            </div>
                                            <!-- logo ended -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6 invoice-id">
                                        <div class="info">
                                            <h1 class="color-white inv-header-1">Invoice</h1>
                                            <p class="color-white mb-1">Invoice Number <span>#{{$order_details->id}}</span></p>
                                            <p class="color-white mb-0">Invoice Date <span>#{{$order_details->order_date}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-top">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="invoice-number mb-30">
                                            <h4 class="inv-title-1">Invoice To</h4>
                                            <h2 class="name mb-10">{{$order_details->name}}</h2>
                                            <p class="invo-addr-1">
                                                {{$order_details->email}} <br />
                                                {{$order_details->division_id}}, {{$order_details->address_line2}}<br />
                                                {{$division->name}}, {{$district->name}}, {{$order_details->zipCode}}<br />
                                                {{$order_details->country_name}} <br />
                                                {{$order_details->phone}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="invoice-number mb-30">
                                            <div class="invoice-number-inner">
                                                <h4 class="inv-title-1">Invoice From</h4>
                                                <h2 class="name mb-10">Animas Roky</h2>
                                                <p class="invo-addr-1">
                                                    Apexo Inc <br />
                                                    billing@apexo.com <br />
                                                    169 Teroghoria, Bangladesh <br />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-center">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-striped invoice-table">
                                        <thead class="bg-active">
                                            <tr class="tr">
                                                <th>No.</th>
                                                <th class="pl0 text-start">Product Name</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-end">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach(App\Models\Cart::where('order_id',$order_details->id)->get() as $orderDetails)

                                            <tr class="bg-grea">
                                                <td>
                                                    <div class="item-desc-1">
                                                        <span><?php echo $i; ?></span>

                                                    </div>
                                                </td>
                                                <td class="pl0">{{$orderDetails->product->title}}</td>
                                                <td class="text-center">
                                                    @if(!is_null($orderDetails->product->offer_price))
                                                    {{$orderDetails->product->offer_price}} BDT
                                                    @else
                                                    {{$orderDetails->product->regular_price}} BDT
                                                    @endif
                                                </td>
                                                <td class="text-center">{{$orderDetails->quantity}} Pcs </td>
                                                <td class="text-end">
                                                    @if(!is_null($orderDetails->product->offer_price))
                                                    {{$orderDetails->quantity * $orderDetails->product->offer_price}} BDT
                                                    @else
                                                    {{$orderDetails->quantity * $orderDetails->product->regular_price}} BDT
                                                    @endif
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="tr2">
                                                <td class="text-end" colspan="4">SubTotal</td>
                                                <td class="text-end">{{$order_details->total_amount}} BDT</td>
                                            </tr>
                                            <tr class="tr2">
                                                <td class="text-end" colspan="4">Tax</td>
                                                <td class="text-end">00 BDT</td>
                                            </tr>
                                            <tr class="tr2">
                                                <td class="text-end" colspan="4">Grand Total</td>
                                                <td class="f-w-600 text-end active-color">{{$order_details->total_amount}} BDT</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-bottom">
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-7">
                                        <div class="mb-30 dear-client">
                                            <h3 class="inv-title-1">Terms & Conditions</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been typesetting industry. Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-5">
                                        <div class="mb-30 payment-method">
                                            <h3 class="inv-title-1">Payment Method</h3>
                                            <ul class="payment-method-list-1 text-14">
                                                <li><strong>Account No:</strong> 00 123 647 840</li>
                                                <li><strong>Account Name:</strong> Jhon Doe</li>
                                                <li><strong>Branch Name:</strong> xyz</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-contact clearfix">
                                <div class="row g-0">
                                    <div class="col-lg-9 col-md-11 col-sm-12">
                                        <div class="contact-info">
                                            <a href="tel:+55-4XX-634-7071"><i class="fa fa-phone"></i> +00 123 647 840</a>
                                            <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i> info@themevessel.com</a>
                                            <a href="tel:info@themevessel.com" class="mr-0 d-none-580"><i class="fa fa-map-marker"></i> 169 Teroghoria, Bangladesh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-btn-section clearfix d-print-none">
                            <a href="javascript:window.print()" class="btn btn-lg btn-print">
                                <i class="fa fa-print"></i> Print Invoice
                            </a>
                            <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                                <i class="fa fa-download"></i> Download Invoice
                            </a>
                            <a id="" href="{{route('homepage')}}" class="btn btn-lg btn-danger">
                                <i class="fa fa-exit"></i> Back to home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice 1 end -->

    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/invoice/js/jspdf.min.js')}}"></script>
    <script src="{{asset('frontend/invoice/js/html2canvas.js')}}"></script>
    <script src="{{asset('frontend/invoice/js/app.js')}}"></script>
</body>

</html>