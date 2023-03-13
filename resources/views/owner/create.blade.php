<!doctype html>
<html>
    <head>
        <title>Add Ownership</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @include('menu')
        <h1>Add Ownership</h1>
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
                <select class="dropdown-select" name="person_id" id="person_id">
                    <option value="none">No people found</option>
                    @foreach($person as $p)
                    <option value="{{ $p->id }}">{{ $p->first_name }}</option>
                    @endforeach
                </select>
                <select class="dropdown-select" name="asset_id" id="asset_id">
                    <option value="none">No Asset found</option>
                    @foreach($asset as $a)
                    <option value="{{ $a->id }}">{{ $a->name }}</option>
                    @endforeach
                </select>
            </div>
            <div style="text-align: center; margin: 10px 0;">
                <button class="add-owner button" type="submit">Add ownership</button>
            </div>
        </form>
    </body>
</html>
