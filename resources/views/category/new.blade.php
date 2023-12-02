<x-layout>
  <div class="container" xmlns:x-slot="http://www.w3.org/1999/xhtml">
    <x-slot:title>
      Добавление категории
    </x-slot:title>

    <h2>Добавление категории</h2>

    <form action="" method="post">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Имя категории</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
  </div>
</x-layout>
