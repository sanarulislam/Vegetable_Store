<?php

namespace App\Http\Controllers;
use App\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
   public function index() {
		$products = Vegetable::all();

		return view('products.index', ['products' => $products]);
	}

	public function add() {
		return view('products.add');
	}

	public function store(Request $request) {
		$product = new Vegetable;
		$product->vegetables_name = $request->vegetables_name;
		$product->vegetables_quantity = $request->vegetables_quantity;
		$product->vegetables_price = $request->vegetables_price;
		$product->vegetables_description = $request->vegetables_description;
		$product->category_id = "1";

		$product->save();

		return redirect('/products');

	}

	public function edit($id) {
		$product = Vegetable::find($id);
		return view('products.edit', ['product' => $product]);
	}
	public function update(Request $request, $id) {

		$product = Vegetable::find($id);

		$product->vegetables_name = $request->vegetables_name;
		$product->vegetables_quantity = $request->vegetables_quantity;
		$product->vegetables_price = $request->vegetables_price;
		$product->vegetables_description = $request->vegetables_description;
		$product->category_id = "1";

		$product->save();

		return redirect('/products');
	}

	public function destroy($id) {

		$product = Vegetable::find($id);

		$product->delete();

		return redirect('/products');

	}
}
