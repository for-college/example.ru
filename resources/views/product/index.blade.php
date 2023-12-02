<x-layout xmlns:x-slot="http://www.w3.org/1999/xhtml">
  <x-slot:title>
    Список товаров
  </x-slot:title>

  <a href="/products/new" class="btn btn-dark m-4">Добавить</a>

  <h1 class="m-4">Список товаров</h1>
  <table class="table">
    <tr>
      <th>Номер</th>
      <th>Название товара</th>
      <th>Цена</th>
      <th>Кол-во</th>
      <th>Описание</th>
      <th>Операции</th>
    </tr>

    @foreach($products as $product)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->description }}</td>
        <td>
          <a class="btn btn-success" href="/products/{{ $product->id }}">Просмотреть</a>
          <a class="btn btn-primary" href="/products/{{ $product->id }}/update">Редактировать</a>
          <a class="btn btn-danger " href="/products/{{ $product->id }}/delete">Удалить</a>
        </td>
      </tr>
    @endforeach
  </table>
</x-layout>
