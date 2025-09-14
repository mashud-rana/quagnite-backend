@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url('{{ asset('/new-frontend/images/price-page.png') }}');">
        <!-- content -->
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-6">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="ic-banner-content ps-0">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <span class="ic-heading-title mb-15">Chaeckout</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <h1 class="black pb-15">Course Add To Cart</h1>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <p class="color-deep-gray pb-30">Read Our documentation first. Before asking questions within the support,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        please be sure that you have read the file documentation which came packaged with your download.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        The documentation covers installation, usage, and often answers the vast majority of questions.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div> -->

                <div class="col-lg-6">
                    <div class="ic-banner-content ">
                        <span class="ic-heading-title mb-15">Checkout</span>
                        <h1 class="black pb-15 ic-inner-heading">Shopping Cart</h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontendv1/images/ebook/cart.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- cart --}}
    <section class="ic-cart-pages ic-section-space bg-white">
        <div class="container">
            <div class="row g-3">
                <div class="col-xxl-8 col-lg-8">
                    <div class="table-responsive">
                        <table class="table car-table">
                            <thead>
                                <tr class="bg-primary">
                                    <th class="text-white fs-14 ff-lexend fw-400">
                                        Items
                                    </th>
                                    <th class="text-white fs-14 ff-lexend fw-400">
                                        Type
                                    </th>
                                    <th class="text-white fs-14 ff-lexend fw-400">
                                        PRICE
                                    </th>
                                    <th class="text-white fs-14 ff-lexend fw-400">
                                        REMOVE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $cartCount = Cart::count();
                                @endphp
                                @if ($cartCount)
                                    @foreach (Cart::content() as $cart)
                                        <tr data-item-id="{{ $cart->rowId }}">
                                            <td>
                                                <div class="d-flex ic-cart-pages">
                                                    <div>
                                                        <img src="{{ getStoreFile($cart->options['image'], $cart->options['storage_type']) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="product-left">
                                                        <p class="black pb-2">{{ $cart->name }}</p>
                                                        <!-- Coupon input and display for each item -->
                                                        <div class="coupon-container">
                                                            @if (isset($cart->options['coupon_code']))
                                                                <span class="applied-coupon">
                                                                    {{ $cart->options['coupon_code'] }}
                                                                    <button type="button" class="remove-item-coupon-btn"
                                                                        title="Remove Coupon">✕</button>
                                                                </span>
                                                            @else
                                                                <input type="text" name="coupon_code"
                                                                    class="item-coupon-code"
                                                                    placeholder="Enter coupon code">
                                                                <button type="button"
                                                                    class="apply-item-coupon-btn ic-btn-simple rounded">Apply
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>{{ ucfirst($cart->options['type']) }}</p>
                                            </td>
                                            <td>
                                                @if (isset($cart->options['discount']) && $cart->options['discount'] > 0)
                                                    <p class="item-price"
                                                        data-original-price="{{ $cart->options['original_price'] }}">
                                                        <s>${{ $cart->options['original_price'] }}</s>
                                                        ${{ number_format($cart->price, 2) }}
                                                    </p>
                                                @else
                                                    <p class="item-price" data-original-price="{{ $cart->price }}">
                                                        ${{ number_format($cart->price, 2) }}</p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('removeCartItem', $cart->rowId) }}"
                                                    class="closed d-block text-center">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <img src="{{ asset('new-frontendv1/images/empty-box.png') }}" alt="">
                                            <p class="text-center gray fs-14"> No Item Found</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    @if ($cartCount)
                        <div class="cart-display">
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <a href="{{ route('front.home') }}" class="ic-btn-simple rounded">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <div class="ic-order-summery">
                        <div class="summary-header bg-gradient-new">
                            <p class="fs-18 fw-400 ff-lexend">Cart Order Summary</p>
                        </div>
                        <div class="summer-body">
                            <ul>
                                <li>
                                    <p class="fw-300">Items Subtotal</p>
                                    <p id="itemsSubtotal">${{ Cart::priceTotal() }}</p>
                                </li>
                                <li>
                                    <p class="fw-300">Discounts</p>
                                    <p id="totalDiscount">${{ Cart::discount() }}</p>
                                </li>
                                <li>
                                    <p class="fw-300">Platform Charge</p>
                                    <p>${{ $platformCharge }}</p>
                                </li>
                                <li>
                                    <p class="fw-300">Total</p>
                                    <p id="newTotalPrice">${{ $totalPrice }}</p>
                                </li>
                            </ul>
                            @if ($cartCount)
                                <a href="{{ route('checkout') }}" class="ic-btn-simple rounded w-100">Proceed to
                                    checkout</a>
                                <a href="{{ route('cancel.order') }}" class="ic-btn-close rounded w-100 mt-3">Cancel
                                    Order</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- cart --}}
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Apply coupon logic
            $(document).on('click', '.apply-item-coupon-btn', function() {
                var button = $(this);
                var couponCode = button.siblings('.item-coupon-code').val();
                var row = button.closest('tr');
                var itemId = row.data('item-id');

                $.ajax({
                    url: '{{ route('apply.coupon') }}',
                    method: 'POST',
                    data: {
                        coupon_code: couponCode,
                        item_id: itemId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 200) {
                            var newPrice = parseFloat(response.data.new_price).toFixed(2);
                            var originalPrice = parseFloat(row.find('.item-price').data(
                                'original-price')).toFixed(2);

                            // Show original price striked through and new price
                            row.find('.item-price').html(
                                `<s>$${originalPrice}</s> $${newPrice}`
                            );

                            // Display applied coupon and show remove option
                            row.find('.coupon-container').html(`
                        <span class="applied-coupon">
                             ${couponCode}
                            <button type="button" class="remove-item-coupon-btn" title="Remove Coupon">✕</button>
                        </span>
                    `);

                            // Update total discount and total price
                            $('#totalDiscount').text('$' + parseFloat(response.data
                                .total_discount).toFixed(2));
                            $('#newTotalPrice').text('$' + parseFloat(response.data.total_price)
                                .toFixed(2));

                            // Update the row ID and store it for later use
                            var newRowId = response.data.new_row_id || itemId;
                            row.attr('data-item-id', newRowId); // Update data attribute
                            row.data('updated-item-id',
                                newRowId); // Store the new row ID in a custom data attribute

                            // Update the remove link href
                            var removeLink = row.find('a.closed');
                            var removeLinkHref = '{{ route('removeCartItem', ':rowId') }}'
                                .replace(':rowId', newRowId);
                            removeLink.attr('href', removeLinkHref);

                            notify('success', response.message);
                        } else {
                            notify('error', response.message);
                        }
                    },
                    error: function(xhr) {
                        notify('error', "An error occurred");
                    }
                });
            });

            // Remove coupon logic
            $(document).on('click', '.remove-item-coupon-btn', function() {
                var button = $(this);
                var row = button.closest('tr');
                var itemId = row.data('updated-item-id') || row.data('item-id');

                $.ajax({
                    url: '{{ route('remove.coupon') }}',
                    method: 'POST',
                    data: {
                        item_id: itemId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 200) {
                            var originalPrice = parseFloat(response.data.original_price)
                                .toFixed(2);

                            // Reset the item price display to original price only
                            row.find('.item-price').html('$' + originalPrice);

                            // Show coupon input field and apply button
                            row.find('.coupon-container').html(`
                        <input type="text" name="coupon_code" class="item-coupon-code" placeholder="Enter coupon code">
                        <button type="button" class="apply-item-coupon-btn ic-btn-simple rounded">Apply</button>
                    `);

                            // Update total discount and total price
                            $('#totalDiscount').text('$' + parseFloat(response.data
                                .total_discount).toFixed(2));
                            $('#newTotalPrice').text('$' + parseFloat(response.data.total_price)
                                .toFixed(2));

                            // Update the row ID
                            var newRowId = response.data.new_row_id || itemId;
                            row.attr('data-item-id',
                                newRowId); // Ensure this reflects the updated ID

                            // Update the remove link href
                            var removeLink = row.find('a.closed');
                            var removeLinkHref = '{{ route('removeCartItem', ':rowId') }}'
                                .replace(':rowId', newRowId);
                            removeLink.attr('href', removeLinkHref);

                            notify('success', response.message);
                        } else {
                            notify('error', response.message);
                        }
                    },
                    error: function(xhr) {
                        notify('error', "An error occurred");
                    }
                });
            });
        });
    </script>
@endpush
