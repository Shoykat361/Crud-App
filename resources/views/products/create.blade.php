<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create A Product</title>
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

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
            color: #ff0000;
        }

        ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Create A Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name"/>
        </div>
        <div>
            <label for="qty">Quantity</label>
            <input type="text" id="qty" name="qty" placeholder="Quantity"/>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" placeholder="Price"/>
        </div>
        <div>
            <input type="submit" value="Save a New Product"/>
        </div>
    </form>
</body>
</html>
