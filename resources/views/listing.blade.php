{{$title}}
<p>listings</p>
    <ul>
        @foreach ($listings as $listing)
            <li>
                <h2>{{ $listing['title'] }}</h2>
                <p>{{ $listing['date'] }}</p>
                <p>{{ $listing['description'] }}</p>

            </li>
        @endforeach
    </ul>


