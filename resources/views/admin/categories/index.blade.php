@extends('admin.index')

@section('content')
<div class="w3-bar">
    <a class="w3-button w3-border w3-green" href="{{ route('categories.create') }}"><i class="fa fa-btn fa-plus">Добавить категорию</i></a>
</div>
<table class="w3-table w3-striped w3-bordered w3-centered w3-hoverable w3-card-4 center">
    <thead>
        <tr class="w3-indigo w3-hover-deep-purple">
            <th>Наименование</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @if (count($categories) > 0)
        @foreach ($categories as $category)
            <tr class="w3-hover-light-blue">
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}" class="w3-button"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    <a href="{{ route('categories.delete', $category) }}" class="w3-button"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection