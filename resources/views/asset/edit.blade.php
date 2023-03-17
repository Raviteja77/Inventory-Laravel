<!doctype html>
<html>
    <head>
        <title>Edit Asset</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @include('menu')
        <h1>Edit Asset</h1>
        @if($errors->any())
        <!-- Display validation errors if there are any -->
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
            <!-- Display the current asset information in the editable format -->
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $item->name }}">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{ $item->description }}">
            <label for="value">Value:</label>
            <input type="number" name="value" id="value" value="{{ $item->value }}">
            <label for="purchased">Date Purchased:</label>
            <input type="date" name="purchased" id="purchased" value="{{ $item->purchased }}">
            <div style="text-align: center; margin: 10px 0;">
                <!-- Submit the edited asset information -->
                <button class="save-changes button" type="submit">Save Changes</button>
            </div>
        </form>
    </body>
</html>
