<?php

class PagesController extends \BaseController {

	public function home()
	{
		return View::make('layouts.static');
	}

	public function app()
	{
		return View::make('matrimony.app');
	}


}