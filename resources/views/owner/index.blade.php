<!DOCTYPE html>
<html>
    <head>
        <title>Owners List</title>
        <!--The following line is a link to an external CSS file that provides styling for the web page.-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <!--The following div contains a header with a title and a menu.-->
        <div class="header">
            <h1>Owners List</h1>
            <!--The following line includes a menu template.-->
            @include('menu')
        </div>
        <!--The following condition checks if the session has a 'success' key, and if it does, it displays a success message.-->
        @if(session()->get('success'))
        <div style="background-color: #4CAF50; color: #fff; padding: 10px; margin: 10px 0;">{{ session()->get('success') }}</div>
        @endif
        @if(count($person) == 0 and count($asset) == 0)
        <h1>Oops!! No ownership added yet</h1>
        @else
        <!--The following table displays the list of owners and their assets.-->
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
                <tr>
                    <td>{{ $p->first_name }}</td>
                    <td>{{ $p->last_name }}</td>
                    <!--The following td displays the list of assets belonging to the current owner.-->
                    <td class="asset-list-data">
                        <ul class="asset-list">
                            @foreach ($p->assets as $asset)
                            <li>{{ $asset->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ date('M j, Y', strtotime($p->date_of_birth)) }}</td>
                    <!--The following td contains links to edit and delete the current owner.-->
                    <td>
                        <a href='{{ route('owner.edit', $p->id) }}' class="edit button">Edit</a>
                        <form action="{{ route('owner.destroy', $p->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to delete??');" type='submit' class="delete button">Delete</button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
        </table>
        @endif
        <!--The following div contains a link to add a new ownership.-->
        <div style="text-align: center; margin: 10px 0;">
            <a href="{{ route('owner.create') }}" class="add-ownership button">Add Ownership</a>
        </div>
    </body>
</html>



