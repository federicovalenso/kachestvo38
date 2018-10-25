@extends('admin.index')

@section('content')
<h1 class="w3-center">Добавить новую услугу</h1>
<form class="form" method="POST" action="{{ route('categories.store') }}">
    @csrf
    @include('admin.categories.form')
</form>
@endsection