<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Hi {{ $order->firstname }} {{ $order->lastname }}</p>
    <p>Your order has been successfully placed.</p>
    <br>
    <table style="width: 600px; text-align: right;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td><img src="{{ asset('assets/images/products') }}/{{ $item->product->image }}" width="100" alt=""></td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ $item->price * $item->quantity }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3" style="border-top:1px solid #ccc;"></td>
                <td style="border-top:1px solid #ccc; font-weight: bold; font-size: 15px;">Subtotal : ${{ $order->subtotal }}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-weight: bold; font-size: 15px;">Tax({{ config('cart.tax') }}%) : ${{ $order->tax }}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-weight: bold; font-size: 15px;">Shipping : Free Shipping</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-weight: bold; font-size: 22px;">Total : ${{ $order->total }}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>