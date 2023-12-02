<x-layout xmlns:x-slot="http://www.w3.org/1999/xhtml">
  <x-slot:title>
    Информация о категории
  </x-slot:title>

  <div>
    <p>id категории: {{ $category->id }}</p>
    <p>Название категории: {{ $category->name }}</p>
  </div>
</x-layout>
