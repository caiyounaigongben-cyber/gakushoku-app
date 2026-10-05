<h1>学食メニュー評価</h1>
<a href="/meals/create">＋ 新規登録</a>

<table border="1" cellpadding="6">
    <tr><th>メニュー</th><th>価格</th><th>評価</th><th>感想</th><th></th></tr>
    @foreach ($meals as $meal)
        <tr>
            <td>{{ $meal->menu_name }}</td>
            <td>{{ $meal->price }}円</td>
            <td>{{ $meal->rating }}</td>
            <td>{{ $meal->memo }}</td>
            <td>
                <a href="/meals/{{ $meal->id }}/edit">編集</a>
                <form method="POST" action="/meals/{{ $meal->id }}" style="display:inline"
                      onsubmit="return confirm('削除しますか？')">
                    @csrf
                    @method('DELETE')
                    <button>削除</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>