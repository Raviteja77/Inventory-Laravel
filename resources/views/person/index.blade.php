
<!DOCTYPE html>
<html>
    <head>
        <title>People List</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <div class="header">
            <h1>People List</h1>
            @include('menu')
        </div>
        @if(session()->get('success'))
        <div style="background-color: #4CAF50; color: #fff; padding: 10px; margin: 10px 0;">{{ session()->get('success') }}</div>
        @endif
        <table>
            <tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Date of Birth</td><td>Action</td></tr>
            @foreach($person as $p)
            <tr>
                <td><a href="{{ route('person.show', $p->id) }}">{{ $p->first_name }}</a></td>
                <td>{{ $p->last_name }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ date('M j, Y', strtotime($p->date_of_birth )) }}</td>
                <td>
                    <a href='{{ route('person.edit', $p->id) }}' class="edit button">Edit</a>
                    <form action="{{ route('person.destroy', $p->id) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete??');" type='submit' class="delete button">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div style="text-align: center; margin: 10px 0;">
            <a href="{{ route('person.create') }}" class="create-person button" style="background-color: #4CAF50;">Add Person</a>
        </div>
    </body>
</html>
