<x-shop-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .container {
            margin-top: 50px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .alert {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #d4edda;
            color: #155724;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
            font-size: 16px;
        }

        .table tbody tr:hover {
            background-color: #f9f9f9;
        }

        .total {
            margin-bottom: 20px;
        }

        .total h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .checkout button {
            padding: 12px 30px;
            font-size: 18px;
            font-weight: bold;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .checkout button:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="container">
        <h1><i class="fa fa-shopping-cart cart-icon"></i>   Your Cart</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @php
                $total = 0;
            @endphp
            @foreach($Carts as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>Rs. {{ $item->product->price }}</td>
                    <td>Rs. {{ $item->product->price * $item->quantity }}</td>
                </tr>
                @php
                    $total += $item->product->price * $item->quantity;
                @endphp
            @endforeach
            </tbody>
        </table>
        <div class="total">
            <h2>Total: Rs. {{ $total }}</h2>
        </div>
        <div class="checkout">
            <form action="{{ route('checkout') }}" method="GET">
                @csrf
                <input type="hidden" name="total" value="{{ $total }}">
                <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
            </form>
        </div>
    </div>
</x-shop-layout>
