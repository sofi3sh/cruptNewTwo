{{--<script >--}}
{{--function fetchData() {--}}
{{--    $.ajax({--}}
{{--        url: '/listing', // URL-адреса вашого маршруту, що оброблює запит--}}
{{--        method: 'GET',--}}
{{--        success: function(response) {--}}
{{--            // Оновлення вмісту сторінки з результатами--}}
{{--            $('#listing-container').html(response);--}}
{{--        },--}}
{{--        error: function(error) {--}}
{{--            console.log(error);--}}
{{--        }--}}
{{--    });--}}
{{--}--}}
{{--// Виклик функції `fetchData` при завантаженні сторінки--}}
{{--fetchData();--}}

{{--// Запуск функції `fetchData` кожну 55-ту хвилину кожної години--}}
{{--setInterval(fetchData, 55 * 60 * 1000); // 55 хвилин * 60 секунд * 1000 мілісекунд--}}
{{--</script>--}}
<p id="listing-container"></p>
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


