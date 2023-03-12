
<!DOCTYPE html>
<html>
    <head>
        <title>People List</title>
        <style>
            /* Global styles */
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
                color: #444;
                margin: 0;
            }

            /* Header styles */
            .header {
                background-color: #333;
                color: #fff;
                padding: 10px;
            }

            .header h1 {
                margin: 0;
                padding: 0;
                font-size: 28px;
                text-align: center;
            }

            /* Table styles */
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                background-color: #f2f2f2;
                text-align: left;
                padding: 10px;
            }

            td {
                border: 1px solid #ddd;
                text-align: left;
                padding: 10px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            /* Form button styles */
            .btn {
                display: inline-block;
                background-color: #333;
                color: #fff;
                text-decoration: none;
                padding: 10px;
                border-radius: 5px;
            }

            .btn:hover {
                background-color: #444;
            }
        </style>
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
                    <a href='{{ route('person.edit', $p->id) }}' class="btn">Edit</a>
                    <form action="{{ route('person.destroy', $p->id) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete??');" type='submit' class="btn" style="background-color: #f44336;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div style="text-align: center; margin: 10px 0;">
            <a href="{{ route('person.create') }}" class="btn" style="background-color: #4CAF50;">Add Person</a>
        </div>
    </body>
</html>
