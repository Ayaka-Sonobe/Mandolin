<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>編集</title>
    </head>
    <body>
        <h1>マンドリン演奏会情報</h1>
        <form action="/concert/{{ $concert->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="concert_name">
                <h2>演奏会名</h2>
                <textarea name="concert[concert_name]">{{ $concert->concert_name }}</textarea>
            </div>       
            <div class="start_time">               
                <h2>開演日時</h2>
                <input type="datetime-local" name="concert[start_time]" value="{{ $concert->start_time }}"></input>
            </div>       
            <div class="place">               
                <h2>会場</h2>
                <div>
                    地域:
                    <select name="concert[area]" value="{{ $concert->area }}">
                        <option value=1>北海道・東北</option>
                        <option value=2>関東</option>
                        <option value=3>北陸・甲信越</option>
                        <option value=4>東海</option>
                        <option value=5>近畿</option>
                        <option value=6>中国・四国</option>
                        <option value=7>九州・沖縄</option>
                    </select>
                </div>
                <div>
                    都道府県:
                    <select name="concert[prefecture]" value="{{ $concert->prefecture }}">
                        <option value=1>北海道</option>
                        <option value=2>青森県</option>
                        <option value=3>岩手県</option>
                        <option value=4>宮城県</option>
                        <option value=5>秋田県</option>
                        <option value=6>山形県</option>
                        <option value=7>福島県</option>
                        <option value=8>茨城県</option>
                        <option value=9>栃木県</option>
                        <option value=10>群馬県</option>
                        <option value=11>埼玉県</option>
                        <option value=12>千葉県</option>
                        <option value=13>東京都</option>
                        <option value=14>神奈川県</option>
                        <option value=15>新潟県</option>
                        <option value=16>富山県</option>
                        <option value=17>石川県</option>
                        <option value=18>福井県</option>
                        <option value=19>山梨県</option>
                        <option value=20>長野県</option>
                        <option value=21>静岡県</option>
                        <option value=22>愛知県</option>
                        <option value=23>岐阜県</option>
                        <option value=24>三重県</option>
                        <option value=25>滋賀県</option>
                        <option value=26>京都府</option>
                        <option value=27>大阪府</option>
                        <option value=28>兵庫県</option>
                        <option value=29>奈良県</option>
                        <option value=30>和歌山県</option>
                        <option value=31>鳥取県</option>
                        <option value=32>島根県</option>
                        <option value=33>岡山県</option>
                        <option value=34>広島県</option>
                        <option value=35>山口県</option>
                        <option value=36>徳島県</option>
                        <option value=37>香川県</option>
                        <option value=38>愛媛県</option>
                        <option value=39>高知県</option>
                        <option value=40>福岡県</option>
                        <option value=41>佐賀県</option>
                        <option value=42>長崎県</option>
                        <option value=43>熊本県</option>
                        <option value=44>大分県</option>
                        <option value=45>宮城県</option>
                        <option value=46>鹿児島県</option>
                        <option value=47>沖縄県</option>
                    </select>
                </div>
                会場名：
                <textarea name="concert[place]">{{ $concert->place }}</textarea>
            </div>       
            <div class="price">               
                <h2>料金</h2>
                <input type='number' name="concert[price]" value="{{ $concert->price }}"></input>
            </div>       
            <div class="song">               
                <h2>曲目</h2>
                <textarea name="concert[song]">{{ $concert->song }}</textarea>
            </div>       
            <div class="link">               
                <h2>公式ホームページ</h2>   
                <textarea name="concert[link]">{{ $concert->link }}</textarea>
            </div>       
            <div class="addition">               
                <h2>備考</h2>
                <textarea name="concert[addition]">{{ $concert->addition }}</textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
