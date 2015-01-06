<?php



Route::group(array('domain' => 'app.matrimony.app'), function()
{

	Route::get('/', [
		'as' => 'app',
		'uses' => 'PagesController@app'
	]);


});


Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);
