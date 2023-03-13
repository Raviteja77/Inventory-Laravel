<!doctype html>
<html>
    <head>
        <title>Edit Owner</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @include('menu')
        <h1>Edit Ownership</h1>
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
            <select class="edit-owner-dropdown" name="person_id" id="person_id">
                <option value="{{ $person->id }}" selected>{{ $person->first_name }}</option>
                @foreach($people as $p)
                    <option value="{{ $p->id }}">{{ $p->first_name }}</option>
                @endforeach
            </select>
             <div style="text-align: center; margin: 10px 0;">
                <button class="save-changes button" type="submit">Save Changes</button>
            </div>
        </form>
    </body>
</html>
