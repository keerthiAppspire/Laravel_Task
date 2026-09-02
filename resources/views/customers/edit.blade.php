<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

    <h1>Edit Customer</h1>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $customer->name }}">
        </div>

        <br>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $customer->email }}">
        </div>

        <br>

        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ $customer->phone }}">
        </div>

        <br>

        <div>
            <label>Address:</label>
            <textarea name="address">{{ $customer->address }}</textarea>
        </div>

        <br>

        <button type="submit">Update Customer</button>

    </form>

    <br>

    <a href="{{ route('customers.index') }}">
        Back to Customers
    </a>

</body>
</html>