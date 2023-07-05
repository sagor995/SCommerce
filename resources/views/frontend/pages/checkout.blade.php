@extends('frontend.layout.template')

@section('page-title')
<title>SCommerce Website</title>
@endsection

@section('body-css')

@endsection

@section('body-content')

        <div role="main" class="main shop py-4">

            <div class="container">

                <div class="row">
                    <div class="col">
                        @if(!Auth::check())
                            <p>Returning customer? <a href="{{ route('userLogin') }}">Click here to login.</a></p>
                        @endif
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-9">

                        <div class="accordion accordion-modern" id="accordion">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Billing Address
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse show">
                                    <div class="card-body">
                                        <form action="/" id="frmBillingAddress" method="post">
                                            
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Full Name</label>
                                                    <input type="name" name="name" id="name" value="{{ Auth::user()->name ? Auth::user()->name : '' }}"
                                                     class="form-control" required readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Email</label>
                                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email ? Auth::user()->email : '' }}"
                                                     class="form-control" required readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Phone</label>
                                                    <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone ? Auth::user()->phone : '' }}"
                                                    class="form-control" placeholder="Enter Your Phone Number" required readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Address Line 1 </label>
                                                    <input type="text" name="address_line1" id="address_line1" placeholder="Address line 1"
                                                     value="{{ Auth::user()->address_line1 ? Auth::user()->address_line1 : '' }}" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Address Line 2 </label>
                                                    <input type="text" name="address_line2" id="address_line2" placeholder="Address line 2"
                                                     value="{{ Auth::user()->address_line2 ? Auth::user()->address_line2 : '' }}" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">District</label>
                                                    @foreach($districts as $district)
                                                        @if($district->id == Auth::user()->district_id)
                                                            <input type="text" name="district_id" id="district_id" placeholder=""
                                                            value="{{ $district->name }}" class="form-control" readonly>
                                                        @endif
                                                    @endforeach
                                                    
                                                    <!-- <select class="form-control" size="0" id="district_id"  name="district_id" >
                                                        <option>Please Select the District</option>
                                                        @foreach($districts as $district)
                                                            <option value="{{$district->id}}"
                                                            @if($district->id == Auth::user()->district_id) selected @endif></option>
                                                        @endforeach
                                                    </select> -->
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Division</label>
                                                    @foreach($divisions as $division)
                                                        @if($division->id == Auth::user()->division_id)
                                                            <input type="text" name="division_id" id="division_id" placeholder=""
                                                            value="{{ $division->name }}" class="form-control" readonly>
                                                        @endif
                                                    @endforeach
                                                    <!-- <select class="form-control" size="0" id="division_id"  name="division_id" >
                                                        <option>Please Select the Division</option>
                                                        @foreach($divisions as $division)
                                                            <option value="{{$division->id}}"
                                                            @if($division->id == Auth::user()->division_id) selected @endif>{{ $division->name }}</option>
                                                        @endforeach
                                                    </select> -->
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Zip Code</label>
                                                    <input class="form-control" type="text" name="zipCode" id="zipCode" 
                                                    value="{{ Auth::user()->zipCode ? Auth::user()->zipCode : '' }}" placeholder="Zip Code" readonly>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Country</label>
                                                    <input class="form-control" type="text" name="country_name" id="country_name"
                                                    value="{{ Auth::user()->country_name ? Auth::user()->country_name : '' }}" placeholder="Country Name" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <input type="submit" value="Continue" class="btn btn-xl btn-light pr-4 pl-4 text-2 font-weight-semibold text-uppercase float-right mb-2" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Shipping Address
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="card-body">
                                        <form action="/" id="frmShippingAddress" method="post">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="custom-control custom-checkbox pb-3">
                                                        <input type="checkbox" class="custom-control-input" id="shipbillingaddress" checked>
                                                        <label class="custom-control-label" for="shipbillingaddress">Ship to billing address?</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="form-group col-lg">
                                                    <label class="font-weight-bold text-dark text-2">Full Name</label>
                                                    <input type="name" name="name" id="name" value="{{ Auth::user()->name ? Auth::user()->name : '' }}"
                                                     class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Email</label>
                                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email ? Auth::user()->email : '' }}"
                                                     class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Phone</label>
                                                    <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone ? Auth::user()->phone : '' }}"
                                                    class="form-control" placeholder="Enter Your Phone Number" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Address Line 1 </label>
                                                    <input type="text" name="address_line1" id="address_line1" placeholder="Address line 1"
                                                     value="{{ Auth::user()->address_line1 ? Auth::user()->address_line1 : '' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Address Line 2 </label>
                                                    <input type="text" name="address_line2" id="address_line2" placeholder="Address line 2"
                                                     value="{{ Auth::user()->address_line2 ? Auth::user()->address_line2 : '' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">District</label>
                                                    <select class="form-control" size="0" id="district_id"  name="district_id" >
                                                        <option>Please Select the District</option>
                                                        @foreach($districts as $district)
                                                            <option value="{{$district->id}}"
                                                            @if($district->id == Auth::user()->district_id) selected @endif>{{ $district->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Division</label>
                                                    <select class="form-control" size="0" id="division_id"  name="division_id" >
                                                        <option>Please Select the Division</option>
                                                        @foreach($divisions as $division)
                                                            <option value="{{$division->id}}"
                                                            @if($division->id == Auth::user()->division_id) selected @endif>{{ $division->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Zip Code</label>
                                                    <input class="form-control" type="text" name="zipCode" id="zipCode" 
                                                    value="{{ Auth::user()->zipCode ? Auth::user()->zipCode : '' }}" placeholder="Zip Code">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Country</label>
                                                    <input class="form-control" type="text" name="country_name" id="country_name"
                                                    value="{{ Auth::user()->country_name ? Auth::user()->country_name : '' }}" placeholder="Country Name">
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <input type="submit" value="Continue" class="btn btn-xl btn-light pr-4 pl-4 text-2 font-weight-semibold text-uppercase float-right mb-2" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Review &amp; Payment
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse">
                                    <div class="card-body">
                                        @if(App\Models\Cart::totalItems() == 0)
                                            <div class="alert alert-info">
                                                You have no items in your cart!. Let's go buy something.
                                            </div>
                                        @else
                                            <table class="shop_table cart">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">
                                                            &nbsp;
                                                        </th>
                                                        <th class="product-name">
                                                            Product
                                                        </th>
                                                        <th class="product-price">
                                                            Price
                                                        </th>
                                                        <th class="product-quantity">
                                                            Quantity
                                                        </th>
                                                        <th class="product-subtotal">
                                                            Total
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach(App\Models\Cart::totalCarts() as $cart)
                                                    <tr class="cart_table_item">
                                                        <td class="product-thumbnail">
                                                            <a href="shop-product-sidebar-left.html">
                                                                <img width="100" height="100" alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-1.jpg')}}">
                                                            </a>
                                                        </td>
                                                        <td class="product-name">
                                                            <a href="shop-product-sidebar-left.html">{{ $cart->product->title }}</a>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="amount">
                                                                @if(!is_null($cart->product->offer_price))
                                                                    {{$cart->product->offer_price}}
                                                                @else
                                                                    {{$cart->product->regular_price}}
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td class="product-quantity" style="text-align:center;">
                                                            {{$cart->quantity}}
                                                        </td>
                                                        <td class="product-subtotal">
                                                            <span class="amount">
                                                                @if(!is_null($cart->product->offer_price))
                                                                    {{ $cart->quantity * $cart->product->offer_price}}
                                                                @else
                                                                    {{ $cart->quantity * $cart->product->regular_price}}
                                                                @endif
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                        <hr class="solid my-5">

                                        <h4 class="text-primary">Cart Totals</h4>
                                        <table class="cart-totals">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>
                                                        <strong class="text-dark">Cart Subtotal</strong>
                                                    </th>
                                                    <td>
                                                        <strong class="text-dark"><span class="amount">
                                                                @if(App\Models\Cart::totalItemsPrice()==0)
                                                                    0 BDT
                                                                @else
                                                                    {{App\Models\Cart::totalItemsPrice()}} BDT
                                                                @endif
                                                            </span></strong>
                                                    </td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>
                                                        Shipping
                                                    </th>
                                                    <td>
                                                        Free Shipping<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
                                                    </td>
                                                </tr>
                                                <tr class="total">
                                                    <th>
                                                        <strong class="text-dark">Order Total</strong>
                                                    </th>
                                                    <td>
                                                        <strong class="text-dark"><span class="amount">
                                                            @if(App\Models\Cart::totalItemsPrice()==0)
                                                                0 BDT
                                                            @else
                                                                {{App\Models\Cart::totalItemsPrice()}} BDT
                                                            @endif
                                                        </span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr class="solid my-5">

                                        <h4 class="text-primary">Payment</h4>

                                        <form action="/" id="frmPayment" method="post">
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="paymentdirectbank">
                                                        <label class="custom-control-label" for="paymentdirectbank">Direct Bank Transfer</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="paymentcheque">
                                                        <label class="custom-control-label" for="paymentcheque">Cheque Payment</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="paymentpaypal">
                                                        <label class="custom-control-label" for="paymentpaypal">Paypal</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="actions-continue">
                            <input type="submit" value="Place Order" name="proceed" class="btn btn-primary btn-modern text-uppercase mt-5 mb-5 mb-lg-0">
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <h4 class="text-primary">Cart Totals</h4>
                        <table class="cart-totals">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>
                                        <strong class="text-dark">Cart Subtotal</strong>
                                    </th>
                                    <td>
                                        <strong class="text-dark"><span class="amount">
                                        @if(App\Models\Cart::totalItemsPrice()==0)
                                            0 BDT
                                        @else
                                            {{App\Models\Cart::totalItemsPrice()}} BDT
                                        @endif
                                        </span></strong>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>
                                        Shipping
                                    </th>
                                    <td>
                                        Free Shipping<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
                                    </td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <th>
                                        <strong class="text-dark">Order Total</strong>
                                    </th>
                                    <td>
                                        <strong class="text-primary"><span class="amount">
                                            @if(App\Models\Cart::totalItemsPrice()==0)
                                                0 BDT
                                            @else
                                                {{App\Models\Cart::totalItemsPrice()}} BDT
                                            @endif
                                        </span></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

@endsection

@section('body-script')

@endsection