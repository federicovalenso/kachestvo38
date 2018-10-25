<label for="name">Наименование</label>
<input type="text" class="w3-input w3-border w3-hover-sand form-control {{ $errors->has('name') ? ' w3-red' : '' }}" placeholder="Введите наименование" name="name" value="{{ old('name') ?? $category->name }}" required>
<button type="submit" class="w3-button w3-teal w3-margin">Сохранить</button>