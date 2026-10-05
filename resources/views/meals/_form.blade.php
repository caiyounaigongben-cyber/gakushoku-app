@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<p>メニュー名<br>
    <input name="menu_name" value="{{ old('menu_name', $meal->menu_name ?? '') }}"></p>
<p>価格（円）<br>
    <input type="number" name="price" value="{{ old('price', $meal->price ?? '') }}"></p>
<p>評価（1〜5）<br>
    <input type="number" name="rating" min="1" max="5" value="{{ old('rating', $meal->rating ?? '') }}"></p>
<p>感想<br>
    <textarea name="memo">{{ old('memo', $meal->memo ?? '') }}</textarea></p>
<button>保存</button>
<a href="/meals">戻る</a>