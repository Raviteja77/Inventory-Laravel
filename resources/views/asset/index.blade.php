<!DOCTYPE html>
<html>
    <head>
        <title>Inventory List</title>
    </head>
    <body>
        @if(session()->get('success'))
        {{ session()->get('success') }}
        @endif
        <table>
            <tr><td>Name</td><td>Description</td><td>Value</td><td>Date Purchased</td></tr>
            @foreach($asset as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->value }}</td>
                <td>{{ $item->purchased }}</td>
                <td><a href='{{ route('asset.edit', $item->id) }}'>Edit</a></td>
            </tr>
            @endforeach
        </table>
        <a href='{{ route('asset.create')' }}'>Add item to Inventory</a>
    </body>
</html>