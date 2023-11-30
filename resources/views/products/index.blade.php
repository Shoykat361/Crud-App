<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .btn {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div class="container">
        <div>
            <a class="btn" href="{{ route('product.create') }}">Create a Product</a>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
