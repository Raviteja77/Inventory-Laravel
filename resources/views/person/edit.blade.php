<!doctype html>
<html>
    <head>
        <!-- set title of the page to "Edit Person" -->
        <title>Edit Person</title>
        <!-- link the stylesheet to the page -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <!-- include the menu blade template -->
        @include('menu')
        <!-- display "Edit Person" as a heading on the page -->
        <h1>Edit Person</h1>
        <!-- check if there are any errors to display -->
        @if($errors->any())
        <!-- display the list of errors -->
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br/>
        @endif
        <!-- create a form to edit the person details -->
        <form class="edit-person-form" method="post" action="{{ route('person.update', $person->id) }}">
            @csrf
            <!-- specify the HTTP method to be used for the form submission -->
            @method('PATCH')
            <!-- create a label and an input field for the first name of the person -->
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" value="{{ $person->first_name }}">
            <!-- create a label and an input field for the last name of the person -->
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" value="{{ $person->last_name }}">
            <!-- create a label and an input field for the email address of the person -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $person->email }}">
            <!-- create a label and an input field for the date of birth of the person -->
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $person->date_of_birth }}">
            <!-- create a button to submit the changes made in the form -->
            <div style="text-align: center; margin: 10px 0;">
                <button class="save-changes button" type="submit">Save Changes</button>
            </div>
        </form>
    </body>
</html>
