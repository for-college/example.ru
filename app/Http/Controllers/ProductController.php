<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(): View
  {
    $products = Product::all();

    return view('product.index', ['products' => $products]);
  }

  public function show(string $id): View
  {
    $product = Product::where('id', '=', $id)->first();

    return view('product.show', ['product' => $product]);
  }

  public function update(Request $request, string $id): View|RedirectResponse
  {
    if (!$request->isMethod('post')) {
      $product = Product::where('id', '=', $id)->first();
      $categories = Category::all();

      return view('product.update', ['product' => $product, 'categories' => $categories]);
    }

    $data = $request->except(['_token']);

    Product::where('id', '=', $id)->update($data);

    return redirect('/products');
  }

  public function delete(string $id)
  {
    Product::where('id', '=', $id)->delete();
    return redirect('/products');
  }

  public function new(Request $request)
  {
    if (!$request->isMethod('post')) {
      $categories = Category::all();
      return view('product.new', ['categories' => $categories]);
    }

    Product::create($request->except(['_token']));

    return redirect('/products');
  }
}
