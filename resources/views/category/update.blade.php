<x-layout xmlns:x-slot="http://www.w3.org/1999/xhtml">
  <x-slot:title>
    Редактирование категории
  </x-slot:title>

  <form action="" method="post" class="m-4">
    @csrf
    <div class="mb-3">
      <label class="form-label" for="name">
        Название категории
      </label>
      <input class="form-control" type="text" id="name" name="name" value="{{ $category->name }}">
    </div>

    <div>
      <button type="submit" class="btn btn-outline-primary">Обновить</button>
    </div>
  </form>
</x-layout>
