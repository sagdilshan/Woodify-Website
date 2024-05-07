@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Customer Cart')
@section('mainpage')

    <body class="page-template belle">
        <div class="pageWrapper">

            <br><br><br>
            <!--Body Con tent-->
            <div id="page-content">
                <!--Page Title-->
                <div class="page section-header text-center">
                    <div class="page-title">
                        <div class="wrapper">
                            <h1 class="page-width">Checkout</h1>
                        </div>
                    </div>
                </div>
                <!--End Page Title-->

                <div class="container">

                    <!-- Title-->
                    <div class="row billing-fields">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                            <div class="create-ac-content bg-light-gray padding-20px-all">
                                <form action="{{ route('checkout.add') }}" method="POST">
                                    @csrf
                                    <fieldset>
                                        <h2 class="login-title mb-3">Billing details</h2>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                                <label for="input-firstname">Name <span class="required-f">*</span></label>
                                                <input name="customer_name" value="{{ Auth::user()->name }}"
                                                    id="input-firstname" type="text" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                                <input name="customer_email" value="{{ Auth::user()->email }}"
                                                    id="input-email" type="email" required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-telephone">Telephone <span
                                                        class="required-f">*</span></label>
                                                <input name="customer_phone" value="{{ Auth::user()->phone }}"
                                                    id="input-telephone" type="number" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">

                                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                                <label for="input-address-1">Address <span
                                                        class="required-f">*</span></label>
                                                <input name="customer_address" value="" id="input-address-1"
                                                    type="text" required>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-city">City <span class="required-f">*</span></label>
                                                <input name="customer_city" value="" id="input-city" type="text"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-province">Province <span
                                                        class="required-f">*</span></label>
                                                <input name="customer_province" value="" id="input-province"
                                                    type="text" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-postcode">Postal Code <span
                                                        class="required-f">*</span></label>
                                                <input name="customer_postal_code" value="" id="input-postcode"
                                                    type="text" required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-country">Country <span class="required-f">*</span></label>
                                                <select name="customer_country" id="input-country" required>
                                                    <option > --- Please Select --- </option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="India">India</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="USA">USA</option>
                                                    <option value="England">England</option>
                                                </select>
                                            </div>
                                        </div>

                                    </fieldset>



                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                                <label for="input-company">Order Notes <span
                                                        class="required-f">*</span></label>
                                                <textarea class="form-control resize-both" rows="3" placeholder="Optional" name="note"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="your-order-payment">
                                <div class="your-order">
                                    <h2 class="order-title mb-4">Your Order</h2>

                                    <div class="table-responsive-sm order-table">
                                        <table class="bg-white table table-bordered table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">Product Name</th>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($buyitems as $item)
                                                    <tr>
                                                        <td class="text-left">{{ $item->product_name }}</td>
                                                        <td>${{ $item->price }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>${{ $item->price * $item->quantity }}</td>
                                                        <input name="id" type="hidden" value="{{ $item->id }}"></input>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            @php
                                                $subtotal = 0;
                                                foreach ($buyitems as $item) {
                                                    $subtotal += $item->price * $item->quantity;
                                                }

                                                $shippingCharge = $subtotal * 0.05; // Calculate 5% of the subtotal for shipping charge
                                                $total = $subtotal + $shippingCharge; // Add the shipping charge to the total
                                            @endphp
                                            <tfoot class="font-weight-600">
                                                <tr>
                                                    <td colspan="3" class="text-right">Shipping (+5%)</td>
                                                    <td>${{ number_format($shippingCharge, 2) }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-right">Total</td>
                                                    <td>${{ number_format($total, 2) }}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <hr />

                                <div class="your-payment">
                                    <h2 class="payment-title mb-3">payment method</h2>
                                    <div class="payment-method">
                                        <div class="payment-accordion">
                                            <div id="accordion" class="payment-section">

                                                <div class="card mb-2">
                                                    <div class="card-header">
                                                        <a class="collapsed card-link" data-toggle="collapse"
                                                            href="#collapseFour"> Payment Information </a>
                                                    </div>
                                                    <div id="collapseFour" class="collapse show"
                                                        data-parent="#accordion">
                                                        <div class="card-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div
                                                                        class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                        <label for="input-cardname">Name on Card <span
                                                                                class="required-f">*</span></label>
                                                                        <input name="name_on_card" value=""
                                                                            placeholder="Card Name" id="input-cardname"
                                                                            class="form-control" type="text" required>
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                        <label for="input-country">Credit Card Type <span
                                                                                class="required-f">*</span></label>
                                                                        <select name="card_type" class="form-control"
                                                                            required>
                                                                            <option > --- Please Select ---
                                                                            </option>
                                                                            <option value="american">American Express
                                                                            </option>
                                                                            <option value="visa">Visa Card</option>
                                                                            <option value="master">Master Card</option>
                                                                            <option value="discover">Discover Card</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                        <label for="input-cardno">Credit Card Number <span
                                                                                class="required-f">*</span></label>
                                                                        <input name="card_number" value=""
                                                                            placeholder="Credit Card Number"
                                                                            id="input-cardno" class="form-control"
                                                                            type="text" required>
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                        <label for="input-cvv">CVV Code <span
                                                                                class="required-f">*</span></label>
                                                                        <input name="cvv" value=""
                                                                            placeholder="Card Verification Number"
                                                                            id="input-cvv" class="form-control"
                                                                            type="text" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                        <label>Expiration Date <span
                                                                                class="required-f">*</span></label>
                                                                        <input type="date" name="exdate"
                                                                            class="form-control" required>
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                        <img class="padding-25px-top xs-padding-5px-top"
                                                                            src="assetss/images/payment-img.jpg"
                                                                            alt="card" title="card" />
                                                                    </div>
                                                                </div>
                                                            </fieldset>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="order-button-payment">
                                            <button class="btn" value="Place order" type="submit">Place
                                                order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
            <!--End Body Content-->


        </div>
    </body>

@endsection
