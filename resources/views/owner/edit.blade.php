<!doctype html>
<html>
    <head>
        <title>Edit Owner</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <!-- Including menu view for navigation bar -->
        @include('menu')
        <h1>Edit Ownership</h1>
        <!-- Display validation errors if there are any -->
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br/>
        @endif
        <!-- Edit ownership form using PATCH method to update data -->
        <form class="edit-owner-form" method="post" action="{{ route('owner.update', $person->id) }}">
            @csrf
            @method('PATCH')
            @foreach($assets as $asset)
            <label for="name">Asset Name:</label>
            <!-- show the name of the asset in a readonly input field -->
            <input type="text" name="id" id="id" hidden value="{{ $asset->id }}">
            <input type="text" name="name" id="name" value="{{ $asset->name }}" readonly>
            <label for="person_id">Person:</label>
            <!-- Dropdown for selecting the person who owns the asset -->
            <select class="edit-owner-dropdown" name="person_id" id="person_id">
                <!-- Display the currently selected person by default -->
                <option value="{{ $person->id }}" selected>{{ $person->first_name }}</option>
                <!-- Display all the other people as options -->
                @foreach($people as $p)
                <option value="{{ $p->id }}">{{ $p->first_name }}</option>
                @endforeach
            </select>
            @endforeach
            <div style="text-align: center; margin: 10px 0;">
                <!-- Submit button to save changes made to the ownership -->
                <button class="save-changes button" type="submit">Save Changes</button>
            </div>
        </form>
    </body>
</html>
