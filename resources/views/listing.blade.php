
<p>listings</p>
    <ul>
        @foreach ($listings as $listing)
            <li>
                <h2>{{ $listing['card__date'] }}</h2>
                <p>{{ $listing['card__title'] }}</p>
                <p>{{ $listing['link__detail'] }}</p>
                <p>{{ $listing['card__description'] }}</p>

            </li>
        @endforeach
    </ul>


