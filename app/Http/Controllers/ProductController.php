<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

	public function index() {
		$products = Product::all();

		return view('products.index', ['products' => $products]);
	}

	public function add() {
		return view('products.add');
	}

	public function store(Request $request) {
		$product = new Product;
		$product->brand_name = $request->brand_name;
		$product->product_size = $request->product_size;
		$product->product_price = $request->product_price;
		$product->product_description = $request->product_description;
		$product->category_id = "1";

		$product->save();

		return redirect('/products');

	}

	public function edit($id) {
		$product = Product::find($id);
		return view('products.edit', ['product' => $product]);
	}
	public function update(Request $request, $id) {

		$product = Product::find($id);

		$product->brand_name = $request->brand_name;
		$product->product_size = $request->product_size;
		$product->product_price = $request->product_price;
		$product->product_description = $request->product_description;
		$product->category_id = "1";

		$product->save();

		return redirect('/products');
	}

	public function destroy($id) {

		$product = Product::find($id);

		$product->delete();

		return redirect('/products');

	}
}
