<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller {
	//
	public function index() {
		$users = User::all();
		return view('users', ['users' => $users]);
	}

	public function destroy($id) {
		$user = User::find($id);
		$user->delete();

		return redirect('/users');
	}
}
