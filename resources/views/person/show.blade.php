
<!doctype html>
<html>
    <head>
        <title>Person Number {{ $person->id }}</title>
    </head>
    <body>
        <h1>Person Number {{ $person->id }}</h1>
        <ul>
            <li>First Name: {{ $person->first_name }}</li>
            <li>Last Name: {{ $person->last_name }}</li>
            <li>Email: {{ $person->email }}</li>
            <li>Date of Birth: {{ $person->date_of_birth }}</li>
        </ul>
    </body>
</html>
