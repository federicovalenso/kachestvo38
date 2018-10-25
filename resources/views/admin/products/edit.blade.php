@extends('admin.index')

@section('content')
<h1 class="w3-center">Редактировать услугу</h1>
<form class="form" method="POST" action="{{ route('products.update', $product) }}">
    @csrf
    @method('PATCH')
    @include('admin.products.form')
</form>
@endsection