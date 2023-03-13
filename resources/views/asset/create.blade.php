<!doctype html>
<html>
    <head>
        <title>Create Asset</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @include('menu')
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
            <form class="create-asset-form" method="post" action="{{ route('asset.store') }}">
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
                    <button class="create-asset button" type="submit">Add to Inventory</button>
                </div>
            </form>
    </body>
</html>
