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
                        <p>Returning customer? <a href="shop-login.html">Click here to login.</a></p>
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
                                                    <label class="font-weight-bold text-dark text-2">Country</label>
                                                    <select class="form-control">
                                                        <option value="">Select a country</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">First Name</label>
                                                    <input type="text" value="" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Last Name</label>
                                                    <input type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Company Name</label>
                                                    <input type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Address </label>
                                                    <input type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">City </label>
                                                    <input type="text" value="" class="form-control">
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
                                                        <input type="checkbox" class="custom-control-input" id="shipbillingaddress">
                                                        <label class="custom-control-label" for="shipbillingaddress">Ship to billing address?</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Country</label>
                                                    <select class="form-control">
                                                        <option value="">Select a country</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">First Name</label>
                                                    <input type="text" value="" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Last Name</label>
                                                    <input type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Company Name</label>
                                                    <input type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">Address </label>
                                                    <input type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">City </label>
                                                    <input type="text" value="" class="form-control">
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
                                                <tr class="cart_table_item">
                                                    <td class="product-thumbnail">
                                                        <a href="shop-product-sidebar-left.html">
                                                            <img width="100" height="100" alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-1.jpg')}}">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="shop-product-sidebar-left.html">Photo Camera</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount">$299</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        1
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount">$299</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_table_item">
                                                    <td class="product-thumbnail">
                                                        <a href="shop-product-sidebar-left.html">
                                                            <img width="100" height="100" alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-2.jpg')}}">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="shop-product-sidebar-left.html">Golf Bag</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount">$72</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        1
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount">$72</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_table_item">
                                                    <td class="product-thumbnail">
                                                        <a href="shop-product-sidebar-left.html">
                                                            <img width="100" height="100" alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-3.jpg')}}">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="shop-product-sidebar-left.html">Workout</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount">$60</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        1
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount">$60</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr class="solid my-5">

                                        <h4 class="text-primary">Cart Totals</h4>
                                        <table class="cart-totals">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>
                                                        <strong class="text-dark">Cart Subtotal</strong>
                                                    </th>
                                                    <td>
                                                        <strong class="text-dark"><span class="amount">$431</span></strong>
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
                                                        <strong class="text-dark"><span class="amount">$431</span></strong>
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
                                        <strong class="text-dark"><span class="amount">$431</span></strong>
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
                                        <strong class="text-dark"><span class="amount">$431</span></strong>
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