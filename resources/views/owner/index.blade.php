
<!DOCTYPE html>
<html>
    <head>
        <title>Owners List</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <div class="header">
            <h1>Owners List</h1>
            @include('menu')
        </div>
        @if(session()->get('success'))
        <div style="background-color: #4CAF50; color: #fff; padding: 10px; margin: 10px 0;">{{ session()->get('success') }}</div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Asset Name</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($person as $p)
                <tr>
                    <td>{{ $p->first_name }}</td>
                    <td>{{ $p->last_name }}</td>
                    <td class="asset-list-data">
                        <ul class="asset-list">
                            @foreach ($p->assets as $asset)
                            <li>{{ $asset->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ date('M j, Y', strtotime($p->date_of_birth)) }}</td>
                    <td>
                        <a href='{{ route('owner.edit', $p->id) }}' class="edit button">Edit</a>
                        <form action="{{ route('owner.destroy', $p->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to delete??');" type='submit' class="delete button">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
        <div style="text-align: center; margin: 10px 0;">
            <a href="{{ route('owner.create') }}" class="add-ownership button">Add Ownership</a>
        </div>
    </body>
</html>
