<!doctype html>
<html>
    <head>
        <title>Edit Owner</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
                line-height: 1.5;
            }

            .edit-owner-form {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 50px;
            }

            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }

            input[type="text"],
            input[type="number"],
            input[type="email"],
            select {
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                width: 300px;
                margin-bottom: 20px;
            }

            select {
                height: 40px;
            }

            button[type="submit"] {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s ease;
            }

            button[type="submit"]:hover {
                background-color: #3e8e41;
            }

            ul {
                list-style: none;
                padding: 0;
                margin: 0;
                color: red;
            }

            li {
                margin-bottom: 5px;
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
        <form class="edit-owner-form" method="post" action="{{ route('owner.update', $person->id) }}">
            @csrf
            @method('PATCH')
            <label for="person_id">Person:</label>
            <select name="person_id" id="person_id">
                <option value="{{ $person->id }}" selected>{{ $person->first_name }}</option>
                @foreach($people as $p)
                    <option value="{{ $p->id }}">{{ $p->first_name }}</option>
                @endforeach
            </select>
            <button type="submit">Save Changes</button>
        </form>
    </body>
</html>
