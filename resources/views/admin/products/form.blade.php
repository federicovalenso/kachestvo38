<label for="name">Наименование</label>
<input type="text" class="w3-input w3-border w3-hover-sand form-control {{ $errors->has('name') ? ' w3-red' : '' }}" placeholder="Введите наименование" name="name" value="{{ $product->name ?? old('name') }}" required>
<label for="categoty">Категория</label>
<select class="w3-select w3-border w3-hover-sand {{ $errors->has('category') ? ' w3-red' : '' }}" name="category" value="{{ $product->category ?? old('category') }}" required>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>
<label for="price">Цена</label>
<input type="number" step="0.01" min="0" class="w3-input w3-border w3-hover-sand form-control {{ $errors->has('price') ? ' w3-red' : '' }}" placeholder="1234,56" name="price" value="{{ $product->price ?? old('price') }}" required>
<button type="submit" class="w3-button w3-teal w3-margin">Сохранить</button>