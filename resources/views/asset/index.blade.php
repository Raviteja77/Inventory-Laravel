<!DOCTYPE html>
<html>
    <head>
        <title>Assets List</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <div class="header">
            <h1>Assets List</h1>
            @include('menu')
        </div>
        @if(session()->get('success'))
        <div style="background-color: #4CAF50; color: #fff; padding: 10px; margin: 10px 0;">{{ session()->get('success') }}</div>
        @endif
        <table>
            <tr><th>Name</th><th>Description</th><th>Value</th><th>Date Purchased</th><th>Actions</th></tr>
            @foreach($asset as $item)
            <tr>
                <td><a href="{{ route('asset.show', $item->id) }}">{{ $item->name }}</a></td>
                <td>{{ $item->description }}</td>
                <td>${{ number_format($item->value, 2) }}</td>
                <td>{{ date('M j, Y', strtotime($item->purchased)) }}</td>
                <td>
                    <a href='{{ route('asset.edit', $item->id) }}' class="edit button">Edit</a>
                    <form action="{{ route('asset.destroy', $item->id) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete??');" type='submit' class="delete button">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div style="text-align: center; margin: 10px 0;">
            <a href="{{ route('asset.create') }}" class="add-item-to-inventory button">Add item to Inventory</a>
        </div>
    </body>
</html>
