@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Giỏ Hàng</h2>
    @if(count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng cộng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ number_format($item['price'], 0, ',', '.') }} VND</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }} VND</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="" class="btn btn-primary">Thanh Toán</a>
    @else
        <p>Giỏ hàng của bạn đang trống.</p>
    @endif
</div>
@endsection
