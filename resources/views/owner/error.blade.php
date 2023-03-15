<!doctype html>
<html>
    <head>
        <title>Error adding Ownership</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
        <!-- The above line includes a stylesheet called styles.css from a folder called css using Laravel's asset helper function -->
    </head>
    <body>
        @include('menu') <!-- This line includes a menu blade template -->
        <h1 style="color: red;">Error adding Ownership.</h1>
        <h3 style="text-align: center; color: red;">one of the input is missing. Please provide both person and asset to add ownership</h3>
    </body>
</html>

