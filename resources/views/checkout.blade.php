@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Customer Cart')
@section('mainpage')

    <body class="page-template belle">
        <div class="pageWrapper">

            <br><br><br>
            <!--Body Content-->
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
                                <form>
                                    <fieldset>
                                        <h2 class="login-title mb-3">Billing details</h2>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                                <label for="input-firstname">Name <span class="required-f">*</span></label>
                                                <input name="firstname" value="{{ Auth::user()->name }}"
                                                    id="input-firstname" type="text" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                                <input name="email" value="{{ Auth::user()->email }}" id="input-email"
                                                    type="email" required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-telephone">Telephone <span
                                                        class="required-f">*</span></label>
                                                <input name="telephone" value="{{ Auth::user()->phone }}"
                                                    id="input-telephone" type="number" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">

                                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                                <label for="input-address-1">Address <span
                                                        class="required-f">*</span></label>
                                                <input name="address_1" value="" id="input-address-1" type="text"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-city">City <span class="required-f">*</span></label>
                                                <input name="city" value="" id="input-city" type="text"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-province">Province <span
                                                        class="required-f">*</span></label>
                                                <input name="province" value="" id="input-province" type="text"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-postcode">Postal Code <span
                                                        class="required-f">*</span></label>
                                                <input name="postcode" value="" id="input-postcode" type="text"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-country">Country <span class="required-f">*</span></label>
                                                <select name="country_id" id="input-country" required>
                                                    <option value=""> --- Please Select --- </option>
                                                    <option value="244">Aaland Islands</option>
                                                    <option value="1">Sri Lanka</option>
                                                    <option value="2">Australia</option>
                                                    <option value="3">America</option>
                                                    <option value="4">England</option>
                                                </select>
                                            </div>
                                        </div>

                                    </fieldset>



                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                                <label for="input-company">Order Notes <span
                                                        class="required-f">*</span></label>
                                                <textarea class="form-control resize-both" rows="3" placeholder="Optional"></textarea>
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
                                                <tr>
                                                    <td class="text-left">Round Sofa</td>
                                                    <td>$40</td>
                                                    <td>1</td>
                                                    <td>$40</td>
                                                </tr>

                                            </tbody>
                                            <tfoot class="font-weight-600">
                                                <tr>
                                                    <td colspan="3" class="text-right">Shipping </td>
                                                    <td>$10.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-right">Total</td>
                                                    <td>$50.00</td>
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
                                                                        <input name="cardname" value=""
                                                                            placeholder="Card Name" id="input-cardname"
                                                                            class="form-control" type="text" required>
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                        <label for="input-country">Credit Card Type <span
                                                                                class="required-f">*</span></label>
                                                                        <select name="country_id" class="form-control"
                                                                            required>
                                                                            <option value=""> --- Please Select ---
                                                                            </option>
                                                                            <option value="1">American Express
                                                                            </option>
                                                                            <option value="2">Visa Card</option>
                                                                            <option value="3">Master Card</option>
                                                                            <option value="4">Discover Card</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                        <label for="input-cardno">Credit Card Number <span
                                                                                class="required-f">*</span></label>
                                                                        <input name="cardno" value=""
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
