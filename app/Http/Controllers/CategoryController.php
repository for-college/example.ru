<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(): View
  {
    $categories = Category::all();

    return view('category.index', ['categories' => $categories]);
  }

  public function show(string $id): View
  {
    $category = Category::where('id', '=', $id)->first();
    return view('category.show', ['category' => $category]);
  }

  public function update(Request $request, string $id): View|RedirectResponse
  {
    if (!$request->isMethod('post')) {
      $category = Category::where('id', '=', $id)->first();
      return view('category.update', ['category' => $category]);
    }

    Category::where('id', '=', $id)->update([
      'name' => $request->name
    ]);

    return redirect('/categories');
  }

  public function delete(string $id)
  {
    Category::where('id', '=', $id)->delete();
    return redirect('/categories');
  }

  public function new(Request $request)
  {
    if (!$request->isMethod('post')) {
      return view('category.new');
    }

    Category::create($request->except(['_token']));

    return redirect('/categories');
  }
}
