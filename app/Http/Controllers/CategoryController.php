<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
	//
	public function index() {
		$categories = Category::all();

		return view('category.index', ['categories' => $categories]);
	}

	public function add() {
		return view('category.add');
	}

	public function store(Request $request) {
		$category = new Category;
		$category->category_name = $request->category_name;

		$category->save();

		return redirect('/categories');

	}

	public function edit($id) {
		$category = Category::find($id);
		return view('category.edit', ['category' => $category]);
	}
	public function update(Request $request, $id) {

		$category = Category::find($id);

		$category->category_name = $request->category_name;

		$category->save();

		return redirect('/categories');
	}

	public function destroy($id) {

		$category = Category::find($id);

		$category->delete();

		return redirect('/categories');

	}
}
