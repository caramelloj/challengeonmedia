<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($players as $player)
        <tr>
            <td>{{ $players->name }}</td>
            <td>{{ $players->id }}</td>
        </tr>
    @endforeach
    </tbody>
</table>