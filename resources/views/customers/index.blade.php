<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>

<body>
    <h1>Customers_Details</h1>
    <a href="{{ route('customers.create') }}">
        Create New Customer
    </a>
    <br><br>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer_Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}">
                            View
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('customers.edit', $customer->id) }}">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form
                            action="{{ route('customers.destroy', $customer->id) }}"
                            method="POST"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this customer?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>

</body>
</html>