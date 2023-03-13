
<!doctype html>
<html>
    <head>
        <title>Showing Person: {{ $person->first_name }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @include('menu')
        <h1>Show Person</h1>
        <div class="show-person">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" value="{{ $person->first_name }}">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" value="{{ $person->last_name }}">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $person->email }}">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $person->date_of_birth }}">
        </div>
    </body>
</html>
