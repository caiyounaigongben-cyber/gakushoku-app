<h1>新規登録</h1>
<form method="POST" action="/meals">
    @csrf
    @include('meals._form')
</form>