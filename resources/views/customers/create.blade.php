<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
</head>
<body>

    <h1>Create Customer</h1>

    <form action="{{ route('customers.store') }}" method="POST">

        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Address:</label>
            <textarea name="address">{{ old('address') }}</textarea>
            @error('address')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <button type="submit">Create Customer</button>

    </form>

</body>
</html>