@extends('admin.index')

@section('content')
<div class="w3-bar">
        <a class="w3-button w3-border w3-green" href="{{ route('products.create') }}"><i class="fa fa-btn fa-plus">Добавить товар</i></a>
</div>
<table class="w3-table w3-striped w3-bordered w3-centered w3-hoverable w3-card-4 center">
    <thead>
        <tr class="w3-indigo w3-hover-deep-purple">
            <th>Наименование</th>
            <th>Цена</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @if (count($products) > 0)
        @foreach ($products as $product)
            <tr class="w3-hover-light-blue">
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="w3-button"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    <a href="{{ route('products.delete', $product) }}" class="w3-button"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection