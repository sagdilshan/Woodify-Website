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
                            <h1 class="page-width">Your cart</h1>
                        </div>
                    </div>
                </div>
                <!--End Page Title-->

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                            <form action="#" method="post" class="cart style2">
                                <table>
                                    <thead class="cart__row cart__header">
                                        <tr>
                                            <th colspan="2" class="text-center">Product</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-right">Total</th>
                                            <th class="action">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart__row border-bottom line1 cart-flex border-top">
                                            <td class="cart__image-wrapper cart-flex-item">
                                                <a href="#"><img class="cart__image"
                                                        src="assetss/images/woodify/product1.jpeg"
                                                        alt="Elastic Waist Dress - Navy / Small"></a>
                                            </td>
                                            <td class="cart__meta small--text-left cart-flex-item">
                                                <div class="list-view-item__title">
                                                    <a href="#">Round Sofa </a>
                                                </div>

                                                <div class="cart__meta-text">
                                                    Color: Navy<br>Size: Large<br>
                                                </div>
                                            </td>
                                            <td class="cart__price-wrapper cart-flex-item">
                                                <span class="money">$40.00</span>
                                            </td>
                                            <td class="cart__update-wrapper cart-flex-item text-right">
                                                <div class="cart__qty text-center">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                                class="icon icon-minus"></i></a>
                                                        <input class="cart__qty-input qty" type="text" name="updates[]"
                                                            id="qty" value="1" pattern="[0-9]*">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                class="icon icon-plus"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right small--hide cart-price">
                                                <div><span class="money">$40.00</span></div>
                                            </td>
                                            <td class="text-center small--hide"><a href="#"
                                                    class="btn btn--secondary cart__remove" title="Remove Item"><i
                                                        class="icon icon anm anm-times-l"></i></a></td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-left"><a href="{{ route('shop') }}"
                                                    class="btn--link cart-continue"><i
                                                        class="icon icon-arrow-circle-left"></i> Continue Shopping</a></td>

                                        </tr>
                                    </tfoot>
                                </table>




                            </form>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">

                            <form>
                                <div class="solid-border">
                                    <div class="row">
                                        <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span
                                                class="money">$40.00</span></span>
                                    </div>
                                    <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                                    <p class="cart_tearm">
                                        <label>
                                            <input type="checkbox" name="tearm" id="cartTearm" class="checkbox"
                                                value="tearm" required>
                                            I agree with the terms and conditions</label>
                                    </p>
                                    <input type="button" name="checkout" id="cartCheckout" onclick="redirectToCheckout()"
                                        class="btn btn--small-wide checkout" value="Checkout">
                                    <div class="paymnet-img"><img src="assetss/images/payment-img.jpg" alt="Payment">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <!--End Body Content-->


        </div>
        <script>
            function redirectToCheckout() {
                var checkbox = document.getElementById('cartTearm');
                if (checkbox.checked) {
                    // Checkbox is checked, redirect to the checkout page
                    window.location.href = '/checkout'; // Adjust the URL to your checkout page
                } else {
                    // Checkbox is not checked, alert the user
                    alert('Please agree to the terms and conditions before proceeding to checkout.');
                }
            }
        </script>

    </body>

@endsection
