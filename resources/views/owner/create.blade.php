<!doctype html>
<html>
    <head>
        <title>Add Ownership</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
        <!-- The above line includes a stylesheet called styles.css from a folder called css using Laravel's asset helper function -->
    </head>
    <body>
        @include('menu') <!-- This line includes a menu blade template -->
        <h1>Add Ownership</h1>
        @if($errors->any())
        <!-- If there are any errors, display them in a list -->
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br/>
        @endif
        <form class="create-owner-form" method="post" action="{{ route('owner.store') }}">
            <!-- A form for creating a new owner with method "post" and action "owner.store" -->
            @csrf <!-- Cross-site request forgery protection for Laravel forms -->
            <div class="dropdown">
                <select class="dropdown-select" name="person_id" id="person_id">
                    <!-- A dropdown select menu for selecting a person for the ownership -->
                    <option value="none">No people found</option>
                    <!-- If there are no people, display "No people found" -->
                    @foreach($person as $p)
                    <!-- Loop through all people and create an option for each one -->
                    <option value="{{ $p->id }}">{{ $p->first_name }}</option>
                    @endforeach
                </select>
                <select class="dropdown-select" name="asset_id" id="asset_id">
                    <!-- A dropdown select menu for selecting an asset for the ownership -->
                    <option value="none">No Asset found</option>
                    <!-- If there are no assets, display "No Asset found" -->
                    @foreach($asset as $a)
                    <!-- Loop through all assets and create an option for each one -->
                    <option value="{{ $a->id }}">{{ $a->name }}</option>
                    @endforeach
                </select>
            </div>
            <div style="text-align: center; margin: 10px 0;">
                <button class="add-owner button" type="submit">Add ownership</button>
                <!-- A submit button for adding the ownership -->
            </div>
        </form>
    </body>
</html>
