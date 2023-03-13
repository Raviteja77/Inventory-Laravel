
<!doctype html>
<html>
    <head>
        <title>Showing Asset: {{ $asset->name }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @include('menu')
        <h1>Show Asset</h1>
        <div class="show-asset">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $asset->name }}" readonly="">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{ $asset->description }}" readonly>
            <label for="value">Value:</label>
            <input type="number" name="value" id="value" value="{{ $asset->value }}">
            <label for="purchased">Date Purchased:</label>
            <input type="date" name="purchased" id="purchased" value="{{ $asset->purchased }}" readonly>
        </div>
    </body>
</html>
