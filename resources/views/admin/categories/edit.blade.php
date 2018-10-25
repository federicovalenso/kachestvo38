@extends('admin.index')

@section('content')
<h1 class="w3-center">Редактировать категорию</h1>
<form class="form" method="POST" action="{{ route('categories.update', $category) }}">
    @csrf
    @method('PATCH')
    @include('admin.categories.form')
</form>
@endsection