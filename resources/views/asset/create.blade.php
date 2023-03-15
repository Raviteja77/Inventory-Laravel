<!doctype html>
<html>
    <head>
        <title>Create Asset</title>
        <!-- Link to the application's CSS stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <!-- Include the menu blade template -->
        @include('menu')
        <!-- Main heading for the create asset page -->
        <h1>Create Asset</h1>
            <!-- Check if there are any form validation errors -->
            @if($errors->any())
            <!-- If there are errors, display them in a list -->
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- Asset creation form -->
            <form class="create-asset-form" method="post" action="{{ route('asset.store') }}">
                @csrf
                <!-- Label and input field for the asset name -->
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">

                <!-- Label and input field for the asset description -->
                <label for="description">Description:</label>
                <input type="text" name="description" id="description">

                <!-- Label and input field for the asset value -->
                <label for="value">Value:</label>
                <input type="number" name="value" id="value">

                <!-- Label and input field for the date the asset was purchased -->
                <label for="purchased">Date Purchased:</label>
                <input type="date" name="purchased" id="purchased">

                <!-- Button to submit the form and add the asset to the inventory -->
                <div style="text-align: center; margin: 10px 0;">
                    <button class="create-asset button" type="submit">Add to Inventory</button>
                </div>
            </form>
    </body>
</html>
