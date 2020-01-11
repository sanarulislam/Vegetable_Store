<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller {

	public function create() {
		return view('announcements.create');
	}

	public function store(Request $request) {
		$announcement = new Announcement;
		$announcement->announcement_text = $request->announcement_text;
		$announcement->announcement_date = date("Y-m-d");

		$announcement->save();

		return redirect('/announcements');
	}

	public function show() {
		$announcements = Announcement::all();
		return view('announcements.index', ['announcements' => $announcements]);
	}

}
