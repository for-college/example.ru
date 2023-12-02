<x-layout>
  <div class="container" xmlns:x-slot="http://www.w3.org/1999/xhtml">
    <x-slot:title>
      Добавление товара
    </x-slot:title>

    <h2>Добавление товара</h2>

    <form action="" method="post">
      @csrf
      <div class="mb-3">
        <label class="form-label" for="name">
          Название товара
        </label>
        <input class="form-control" type="text" id="name" name="name">
      </div>

      <div class="mb-3">
        <label class="form-label" for="price">
          Цена товара
        </label>
        <input class="form-control" type="number" min="0" max="99999999,99" step="0.01" id="price" name="price">
      </div>

      <div class="mb-3">
        <label class="form-label" for="quantity">
          Кол-во товара
        </label>
        <input class="form-control" type="number" min="0" max="99999999" step="1" id="quantity" name="quantity">
      </div>

      <div class="mb-3">
        <label class="form-label" for="description">
          Описание товара
        </label>
        <input class="form-control" type="text" id="description" name="description">
      </div>

      <div class="mb-3">
        <label for="category_id" class="form-label">Категория</label>
        <select name="category_id" class="form-select" id="category_id">
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
  </div>
</x-layout>
