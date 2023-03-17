<!doctype html>
<html>
    <head>
        <title>Showing Asset: {{ $asset->name }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <!-- include the menu blade template -->
        @include('menu')
        <h1>Show Asset</h1>
        <div class="show-asset">
            <!-- Display the current asset information in the read-only format -->
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $asset->name }}" readonly> <!-- show the name of the asset in a readonly input field -->
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{ $asset->description }}" readonly> <!-- show the description of the asset in a readonly input field -->
            <label for="value">Value:</label>
            <input type="number" name="value" id="value" value="{{ $asset->value }}"> <!-- allow the value of the asset to be updated in an input field -->
            <label for="purchased">Date Purchased:</label>
            <input type="date" name="purchased" id="purchased" value="{{ $asset->purchased }}" readonly> <!-- show the date purchased of the asset in a readonly input field -->
        </div>
    </body>
</html>
