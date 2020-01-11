<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller {
	//
	public function index() {
		return view('home');
	}

	public function detail() {
		return view('about');
	}

	public function register() {
		return view("register");
	}

	public function store(Request $request) {
		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = $request->password;

		$user->save();

		return redirect('/home');

	}

}
