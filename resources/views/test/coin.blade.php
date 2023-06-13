
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">coin</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($coins as $coin)
            <tr>
                <th scope="row">{{ $coin->id }}</th>
                <td>{{ $coin->name }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

