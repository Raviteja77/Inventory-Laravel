<!doctype html>
<html>
    <head>
        <title>Create Owner</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f1f1f1;
                margin: 0;
                padding: 0;
            }
            .dropdown {
                display: flex;
                justify-content: space-evenly;
            }
            .create-owner-form {
                display: flex;
                flex-direction: column;
                margin-top: 20px;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0px 0px 10px #ccc;
            }
            select {
                width: 35%;
                padding: 10px;
                margin-bottom: 10px;
                border: none;
                border-radius: 5px;
                box-shadow: 0px 0px 5px #ccc;
            }
            .add-owner-button {
                width: 15%;
                padding: 10px 20px;
                background-color: #008CBA;
                color: #fff;
                border: none;
                border-radius: 5px;
                box-shadow: 0px 0px 5px #ccc;
                cursor: pointer;
            }
            .add-owner-button:hover {
                background-color: #006B8F;
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
        <form class="create-owner-form" method="post" action="{{ route('owner.store') }}">
            @csrf
            <div class="dropdown">
                <select name="person_id" id="person_id">
                    <option value="none">No people found</option>
                    @foreach($person as $p)
                    <option value="{{ $p->id }}">{{ $p->first_name }}</option>
                    @endforeach
                </select>
                <select name="asset_id" id="asset_id">
                    <option value="none">No Asset found</option>
                    @foreach($asset as $a)
                    <option value="{{ $a->id }}">{{ $a->name }}</option>
                    @endforeach
                </select>
            </div>
            <div style="text-align: center; margin: 10px 0;">
                <button class="add-owner-button" type="submit">Add ownership</button>
            </div>
        </form>
    </body>
</html>
