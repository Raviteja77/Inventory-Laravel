<!doctype html>
<html>
    <head>
        <title>Create Person</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @include('menu')
        <h1>Create Person</h1>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br/>
        @endif
        <form class="create-person-form" method="post" action="{{ route('person.store') }}">
            @csrf
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth">
            <div style="text-align: center; margin: 10px 0;">
                <button class="add-person button" type="submit">Add Person</button>
            </div>
        </form>
    </body>
</html>
