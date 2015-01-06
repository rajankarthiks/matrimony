<?php

class PagesController extends \BaseController {

	public function home()
	{
		return View::make('pages.home');
	}

	public function app()
	{
		return View::make('matrimony.app');
	}


}