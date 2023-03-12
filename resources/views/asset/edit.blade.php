<!doctype html>
<html>
    <head>
        <title>Edit Asset</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
                line-height: 1.5;
                padding: 0;
                margin: 0;
            }
            .container {
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
                background-color: #fff;
                box-shadow: 0px 0px 10px #ccc;
            }
            .edit-asset-form {
                margin-top: 20px;
                padding: 20px;
            }
            input[type="text"],
            input[type="number"],
            input[type="email"],
            input[type="date"],
            select {
                border-radius: 4px;
                border: 1px solid #ccc;
                padding: 8px;
                margin-bottom: 16px;
                width: 100%;
            }
            label {
                display: block;
                margin-bottom: 8px;
            }
            button[type="submit"] {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 12px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-top: 16px;
                cursor: pointer;
                border-radius: 4px;
            }
            button[type="submit"]:hover {
                background-color: #3e8e41;
            }
            ul {
                color: red;
                list-style: none;
                margin: 0;
                padding: 0;
            }
            ul li {
                margin-bottom: 8px;
            }
        </style>
    </head>
    <body>
        @include('menu')
        <div class="container">
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <br/>
            @endif
            <form class="edit-asset-form" method="post" action="{{ route('asset.update', $item->id) }}">
                @csrf
                @method('PATCH')
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $item->name }}">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ $item->description }}">
                <label for="value">Value:</label>
                <input type="number" name="value" id="value" value="{{ $item->value }}">
                <label for="purchased">Date Purchased:</label>
                <input type="date" name="purchased" id="purchased" value="{{ $item->purchased }}">
                <div style="text-align: center; margin: 10px 0;">
                    <button type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </body>
</html>
