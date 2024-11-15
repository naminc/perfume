@extends('layouts.app')

@section('content')
<div class="site-content">
    <main class="site-main main-container no-sidebar">
        <div class="container">
            <div class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin">
                        <a href="{{ url('/') }}">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="trail-item trail-end active">
                        <span>Shopping Cart</span>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="main-content-cart main-content col-sm-12">
                    <h3 class="custom_blog_title">Shopping Cart</h3>
                    <div class="page-main-content">
                        <div class="shoppingcart-content">
                            @if(!empty($cart) && count($cart) > 0)
                                <form action="{{ route('cart.update') }}" method="POST" class="cart-form">
                                    @csrf
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-remove"></th>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name"></th>
                                                <th class="product-price"></th>
                                                <th class="product-quantity"></th>
                                                <th class="product-subtotal"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $total = 0; @endphp
                                            @foreach($cart as $id => $product)
                                                @php
                                                    $subtotal = $product['price'] * $product['quantity'];
                                                    $total += $subtotal;
                                                @endphp
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="remove"></button>
                                                        </form>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                        </a>
                                                    </td>
                                                    <td class="product-name" data-title="Product">
                                                        <a href="#" class="title">{{ $product['name'] }}</a>
                                                        <span class="attributes-select attributes-color">Black,</span>
                                                        <span class="attributes-select attributes-size">XXL</span>
                                                    </td>
                                                  
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity">
                                                            <div class="control">
                                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                                <input type="number" name="quantities[{{ $id }}]" value="{{ $product['quantity'] }}" min="1" class="input-qty qty" size="4">
                                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-price" data-title="Price">
                                                        {{ number_format($product['price'], 0) }}
                                                        <span class="woocommerce-Price-amount">
                                                            VND
                                                        </span>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Subtotal">
                                                        <span class="woocommerce-Price-amount" style="color: red;">
                                                            {{ number_format($subtotal, 0, ',', '.') }} VND
                                                        </span>
                                                    </td>
                                                </tr>
                                                
                                            @endforeach
                                            <tr>
                                                <td class="actions">
                                                    <div class="coupon">
                                                        <label class="coupon_code">Coupon Code:</label>
                                                        <input type="text" class="input-text" placeholder="Promotion code here">
                                                        <a href="#" class="button"></a>
                                                    </div>
                                                    <div class="order-total">
                                                                <span class="title">
                                                                    Total Price:
                                                                </span>
                                                        <span class="total-price">
                                                                    $95
                                                                </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </form>
                              
                            @else
                                <p>Your cart is empty.</p>
                            @endif
                            <div class="control-cart">
                                <button class="button btn-continue-shopping">
                                    Continue Shopping
                                </button>
                                <button class="button btn-cart-to-checkout">
                                    Checkout
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
