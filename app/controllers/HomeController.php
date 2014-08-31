<?php

class HomeController extends BaseController {

	// Simply load the home page
	public function index()
	{
		$data = [
		'totalBurned' => Files::onlyTrashed()->count()
		];
		return View::make('home')->with('data', $data);
	}

}
