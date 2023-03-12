
<!DOCTYPE html>
<html>
    <head>
        <title>Owners List</title>
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

            .asset-list ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .asset-list ul li {
                display: inline-block;
            }
            
            .asset-list ul li:not(:last-child)::after {
                content: ",";
                margin-right: 5px;
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
                    <td class="asset-list">
                        <ul>
                            @foreach ($p->assets as $asset)
                            <li>{{ $asset->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ date('M j, Y', strtotime($p->date_of_birth)) }}</td>
                    <td>
                        <a href='{{ route('owner.edit', $p->id) }}' class="btn">Edit</a>
                        <form action="{{ route('owner.destroy', $p->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to delete??');" type='submit' class="btn" style="background-color: #f44336;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
        <div style="text-align: center; margin: 10px 0;">
            <a href="{{ route('owner.create') }}" class="btn" style="background-color: #4CAF50;">Add Ownership</a>
        </div>
    </body>
</html>
