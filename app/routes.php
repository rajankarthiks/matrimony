<?php



Route::group(array('domain' => '{domain}.com'), function()
{

	Route::get('/', [
		'as' => 'home',
		'uses' => 'PagesController@home'
	]);

});


Route::group(array('domain' => 'matrimony.{domain}.com'), function()
{

	Route::get('/', [
		'as' => 'app',
		'uses' => 'PagesController@app'
	]);


});
