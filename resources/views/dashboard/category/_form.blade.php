<div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $category->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="description">Descripcion:</label>
    <textarea name="description" class="form-control" required>{{ old('description', $category->description ?? '') }}</textarea>
</div>
