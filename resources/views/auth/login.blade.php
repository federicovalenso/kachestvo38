@extends ('layouts.app')

@section ('content')
<form class="w3-container" method="post" action="{{ route('login') }}">
    @csrf
    <label for="email"><b>Пользователь</b></label>
    <input type="email" class="w3-input w3-border form-control {{ $errors->has('email') ? ' w3-red' : '' }}" placeholder="Введите адрес почты" name="email" required>
    <label for="password"><b>Пароль</b></label>
    <input type="password" class="w3-input w3-border form-control{{ $errors->has('password') ? ' w3-red' : '' }}" name="password" required>
    <button type="submit" class="w3-btn w3-indigo w3-margin">Войти</button>
</form>
@endsection