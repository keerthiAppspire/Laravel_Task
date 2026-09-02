<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>

    <h1>Customer_Details</h1>

    <p>ID: {{ $customer->id }}</p>
    <p>Name: {{ $customer->name }}</p>
    <p>Email: {{ $customer->email }}</p>
    <p>Phone: {{ $customer->phone }}</p>
    <p>Address: {{ $customer->address }}</p>

    <br>

    <a href="{{ route('customers.index') }}">
        Back to Customers
    </a>

</body>
</html>