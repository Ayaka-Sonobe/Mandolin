<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $concert->concert_name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>マンドリン演奏会情報</h1>
        <div class="content">
            <h2 class="concert_name">
            {{ $concert->concert_name }}
            </h2>
            <div class="content__post">
                <h3>開演日時</h3>
                <p>{{ $concert->start_time }}</p>
                <h3>会場</h3>
                <p>{{ $concert->area}}</p>
                <p>{{ $concert->prefecture}}</p>
                <p>{{ $concert->place}}</p>
                <h3>料金</h3>
                <p>{{ $concert->price }}</p>
                <h3>曲目</h3>
                <p>{{ $concert->song }}</p>
                <h3>公式ホームページ</h3>
                <p>{{ $concert->link }}</p>
                <h3>備考</h3>
                <p>{{ $concert->addition }}</p>
            </div>
        </div>
        <div class="footer">
            <p class="edit">[<a href="/concerts/{{ $concert->id }}/edit">編集</a>]</p>
            <form action="/concerts/{{ $concert->id }}" id="form_{{ $concert->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button> 
            </form>
            <a href="/">戻る</a>
        </div>
    </body>
</html>