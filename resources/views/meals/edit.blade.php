<h1>編集</h1>
<form method="POST" action="/meals/{{ $meal->id }}">
    @csrf
    @method('PUT')
    @include('meals._form')
</form>