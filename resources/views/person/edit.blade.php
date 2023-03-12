
<!doctype html>
<html>
    <head>
        <title>Edit Person</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f1f1f1;
            }
            h1 {
                text-align: center;
            }
            form {
                width: 45%;
                display: flex;
                flex-direction: column;
                margin-top: 20px;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0px 0px 10px #ccc;
                position: absolute;
                left: 25%;
            }
            label {
                margin: 1rem 0;
            }
            input[type="text"],
            input[type="email"],
            input[type="date"] {
                width: 95%;
                padding: 10px;
                margin-bottom: 10px;
                border: none;
                border-radius: 5px;
                box-shadow: 0px 0px 5px #ccc;
            }
            button {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 5px;
                box-shadow: 0px 0px 5px #ccc;
                cursor: pointer;
            }
            button:hover {
                background-color: #3e8e41;
            }
            ul {
                list-style: none;
                padding: 0;
                margin: 0;
                color: red;
            }
        </style>
    </head>
    <body>
        @include('menu')
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br/>
        @endif
        <form method="post" action="{{ route('person.update', $person->id) }}">
            @csrf
            @method('PATCH')
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" value="{{ $person->first_name }}">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" value="{{ $person->last_name }}">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $person->email }}">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $person->date_of_birth }}">
            <div style="text-align: center; margin: 10px 0;">
                <button type="submit">Save Changes</button>
            </div>
        </form>
    </body>
</html>
