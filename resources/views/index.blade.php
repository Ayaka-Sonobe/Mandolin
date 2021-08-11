<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>トップ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <h1>マンドリン演奏会情報</h1>
        <p class='create'>[<a href='/concerts/create'>投稿</a>]</p>
        
        <div class='concerts'>
            <h2>今月の演奏会</h2>
            @foreach ($concerts as $concert)
                <div class='concert'>
                    <p class='start_time'>{{ $concert->start_time }}</p>
                    <a href="/concerts/{{ $concert->id }}">{{ $concert->concert_name }}</a>
                    <form action="/concerts/{{ $concert->id }}" id="form_{{ $concert->id }}" method="post" style="display:inline">
                        @csrf
                    </form>
                    <p class="place">{{ $concert->prefecture }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
