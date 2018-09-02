@extends('layouts.app')

@section('content')
<h1 class="w3-center">Добавить новую услугу</h1>
<form class="form" method="POST" action="{{ route('products.store') }}">
    @csrf
    @include('admin.products.form')
</form>
@endsection