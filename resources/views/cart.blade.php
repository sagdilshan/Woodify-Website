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
                            <h1 class="page-width">Your cart</h1>
                        </div>
                    </div>
                </div>
                <!--End Page Title-->

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                            <form action="{{ route('cart.update') }}" method="post" class="cart style2">
                                <table>
                                    <thead class="cart__row cart__header">
                                        <tr>
                                            <th colspan="2" class="text-center">Product</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center" style="display: none"></th>
                                            <th class="text-center">Quantity</th>

                                            <th class="text-right">Total</th>
                                            <th class="action">&nbsp;</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @forelse ($cartitems as $item)
                                            <tr class="cart__row border-bottom line1 cart-flex border-top">
                                                <td class="cart__image-wrapper cart-flex-item">
                                                    <a><img class="cart__image"
                                                            src="{{ !empty($item->thumb) ? url('upload/thumb_images/' . $item->thumb) : url('upload/no_product.png') }}"
                                                            alt=""></a>
                                                </td>
                                                <td class="cart__meta small--text-left cart-flex-item">
                                                    <div class="list-view-item__title">
                                                        <a>{{ $item->product_name }}</a>
                                                    </div>


                                                </td>
                                                <td style="display: none">
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                </td>


                                                <td class="cart__price-wrapper cart-flex-item small--hide">
                                                    <span class="money">${{ $item->price }}</span>
                                                </td>
                                                <td class="cart__price-wrapper cart-flex-item text-right">
                                                    <div class="cart__qty text-center">
                                                        <div class="qtyField">
                                                            <input class="cart__qty-input qty numberadd" type="number"
                                                                name="updates[]" id="qty_{{ $item->id }}"
                                                                data-price="{{ $item->price }}"
                                                                value="{{ $item->quantity }}" min="1" max="5"
                                                                onchange="updateTotalPrice(this);">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right ">
                                                    <div id="total_price_{{ $item->id }}"><span
                                                            class="money">${{ $item->price * $item->quantity }}</span>
                                                    </div>
                                                </td>

                                                <td class="text-center "><a href="{{ route('cart.delete', $item->id) }}"
                                                        class="btn btn--secondary cart__remove" title="Remove Item"><i
                                                            class="icon icon anm anm-times-l"></i></a></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Your Cart is Currently Empty. Shop
                                                    Now</td>
                                            </tr>
                                        @endforelse

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
                                @php
                                    $subtotal = 0;
                                @endphp

                                @foreach ($cartitems as $item)
                                    <tr>
                                        <!-- Your item details here -->
                                        <td class="text-right">
                                            <span style="display: none"
                                                class="money">${{ $item->price * $item->quantity }}</span>
                                        </td>

                                    </tr>
                                    @php
                                        $subtotal += $item->price * $item->quantity;
                                    @endphp
                                @endforeach



                                <div class="solid-border">
                                    <div class="row">
                                        <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                                        <span id="total_charges"
                                            class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span
                                                class="money">${{ number_format($subtotal, 2) }}</span></span>

                                    </div>
                                    <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                                    <p class="cart_tearm">
                                        <label>
                                            <input type="checkbox" name="tearm" id="cartTearm" class="checkbox"
                                                value="tearm" required>
                                            I agree with the terms and conditions</label>
                                    </p>
                                    <input type="button" name="checkout" id="cartCheckout"
                                        class="btn btn--small-wide checkout" value="Checkout"
                                        onclick="redirectToCheckout()">
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


        <script>
            function updateTotalPrice(element) {
                var price = parseFloat(element.dataset.price); // Get the unit price from data attribute
                var quantity = parseInt(element.value); // Get the current quantity from the input field
                var total = price * quantity; // Calculate total price

                // Update the total price display
                document.getElementById('total_price_' + element.id.split('_')[1]).innerHTML =
                    `<span class="money">$${total.toFixed(2)}</span>`;
            }
        </script>

        <script>
            function updateQuantityInDatabase(itemId, quantity) {
                fetch('/cart/update-quantity', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            id: itemId,
                            quantity: quantity
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        // Update individual item's total price
                        const totalPriceElement = document.getElementById('total_price_' + itemId);
                        const pricePerItem = parseFloat(totalPriceElement.dataset.price);
                        totalPriceElement.innerHTML = `<span class="money">$${(pricePerItem * quantity).toFixed(2)}</span>`;

                        // Recalculate and update total charges sum
                        updateTotalCharges();
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }

            function updateTotalCharges() {
                const totalChargesElement = document.getElementById('total_charges');
                const totalPriceElements = document.querySelectorAll('[id^="total_price_"]');

                let total = 0;
                totalPriceElements.forEach(element => {
                    total += parseFloat(element.innerText.replace('$', ''));
                });

                totalChargesElement.innerHTML = `<span class="money">$${total.toFixed(2)}</span>`;
            }
        </script>

    </body>

@endsection
