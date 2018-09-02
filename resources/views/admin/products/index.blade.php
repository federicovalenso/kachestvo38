@extends('layouts.app')

@section('content')
<div class="w3-responsive">
<a class="w3-button w3-green" href="{{ route('products.create') }}"><i class="fa fa-btn fa-plus"></i>Добавить услугу</a>

    @if (count($products) > 0)
    <table class="w3-table w3-striped w3-bordered  w3-hoverable">
        <thead>
            <tr class="w3-indigo w3-hover-deep-purple">
                <th>Наименование</th>
                <th>Цена</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr class="w3-hover-light-blue">
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="w3-button"><i class="fa fa-pencil-square-o"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif

</div>
@endsection