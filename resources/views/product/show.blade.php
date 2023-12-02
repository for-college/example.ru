<x-layout xmlns:x-slot="http://www.w3.org/1999/xhtml">
  <x-slot:title>
    Информация о товаре
  </x-slot:title>

  <div>
    <p>id товара: {{ $product->id }}</p>
    <p>Название товара: {{ $product->name }}</p>
    <p>Цена товара: {{ $product->price }}</p>
    <p>Кол-во товара: {{ $product->quantity }}</p>
    <p>Описание товара: {{ $product->description }}</p>
  </div>
</x-layout>
