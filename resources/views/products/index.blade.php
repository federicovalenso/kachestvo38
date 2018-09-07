@extends('layouts.app')

@section('content')
<div class="w3-responsive">

    @if (count($products) > 0)
    <table class="w3-table w3-striped w3-bordered  w3-hoverable">
        <thead>
            <tr class="w3-indigo w3-hover-deep-purple">
                <th>Наименование</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr class="w3-hover-light-blue">
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $products->links('pagination.w3') }}
    @endif

</div>
@endsection