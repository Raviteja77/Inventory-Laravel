<!doctype html>
<html>
    <head>
        <title>Create Asset</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }

            h1 {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }

            input[type=text], input[type=number], input[type=date] {
                width: 95%;
                padding: 10px;
                margin-bottom: 20px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }

            button[type=submit] {
                padding: 10px;
                background-color: #428bca;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            button[type=submit]:hover {
                background-color: #3071a9;
            }

            .error {
                color: red;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        @include('menu')
        <div class="container">
            <h1>Create Asset</h1>
            @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('asset.store') }}">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">

                <label for="description">Description:</label>
                <input type="text" name="description" id="description">

                <label for="value">Value:</label>
                <input type="number" name="value" id="value">

                <label for="purchased">Date Purchased:</label>
                <input type="date" name="purchased" id="purchased">

                <div style="text-align: center; margin: 10px 0;">
                    <button type="submit">Add to Inventory</button>
                </div>
            </form>
        </div>
    </body>
</html>
