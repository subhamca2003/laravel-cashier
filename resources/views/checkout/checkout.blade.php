<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout Page</h1>

    <form action="{{ route('process-checkout') }}" method="POST">
        @csrf
        <input type="text" name="product_name" placeholder="Product Name">
        <input type="number" name="amount" placeholder="Amount">
        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
