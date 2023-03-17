<!-- This is a HTML page for creating a new person -->
<!doctype html>
<html>
    <head>
        <title>Create Person</title>
        <!-- Link to the stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <!-- Include the menu bar -->
        @include('menu')
        <h1>Create Person</h1>
        <!-- Display validation errors, if any -->
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br/>
        @endif
        <!-- Create a form for creating a new person -->
        <form class="create-person-form" method="post" action="{{ route('person.store') }}">
            <!-- CSRF protection -->
            @csrf
            <!-- Input field for first name -->
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name">
            <!-- Input field for last name -->
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name">
            <!-- Input field for email -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <!-- Input field for date of birth -->
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth">
            <!-- Add a button for submitting the form -->
            <div style="text-align: center; margin: 10px 0;">
                <button class="add-person button" type="submit">Add Person</button>
            </div>
        </form>
    </body>
</html>


