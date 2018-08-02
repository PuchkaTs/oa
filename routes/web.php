<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [
    'as'=>'home_path',
    'uses'=>'PagesController@home'
]);

Route::get('/surgalt/{id}', [
    'as'=>'surgalt_path',
    'uses'=>'PagesController@showSurgalt'
]);
Route::get('/registration/{id}', [
    'as'   => 'burtgel_path',
    'uses' => 'PagesController@showBurtgel'
]);
Route::get('/application/{id}', [
    'as'   => 'application_get_path',
    'uses' => 'PagesController@showApplication'
]);
Route::post('/application', [
    'as'   => 'application_path',
    'uses' => 'PagesController@storeApplication'
]);
Route::get('/salbar/edit/{id}', [
    'as'   => 'salbar_path',
    'uses' => 'PagesController@edit_salbar_by_id'
]);
Route::post('/salbar/edit/{id}', [
    'as'   => 'salbar_path',
    'uses' => 'PagesController@update_coords_salbar'
]);

Route::get('/news/{id}', [
    'as'   => 'news_show_path',
    'uses' => 'PagesController@show_news'
]);

Route::get('/events/{id}', [
    'as'   => 'events_show_path',
    'uses' => 'PagesController@show_event'
]);

Route::get('/product/{id}', [
    'as'   => 'products_show_path',
    'uses' => 'PagesController@show_product'
]);

Route::get('/map', function () {
	$config['center'] = '47.895565, 106.909438';
	$config['zoom'] = '14';
	$config['height'] = '500px';
	GMaps::initialize($config);
	$marker = array();
	$marker['position'] = '47.895565, 106.909438';
	$marker['icon'] = asset("assets/marker.svg");
	$marker['draggable'] = false;
	$marker['animation'] = 'DROP';
	$marker['title'] = "Төв байр";
    $marker['infowindow_content'] =
        '<div id="content">'.
        '<h1><a href="' .
        '#' .
         '">' .
        'Зайсан салбар' .
        '</a></h1>'.
        '<p><a href="' .
        '#' .
        '">' .
        'ХУД, Оргил стар хотхон, 58-1- 4 /Зайсан “Оргил” дэлгүүрийн замын зүүн талд/' .
        '</a></p>'.
        '<a href="' .
        '#' .
        '">' .
        '<img src="'.
        '/assets/logo.png'.
        '" width="300" >'.
        '</a></div>';
	GMaps::add_marker($marker);
	$map = GMaps::create_map();

    return view('map')->with(compact('map'));
});

/**
 * Super Admin
 */
Route::get('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst'
]);
Route::post('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst_store'
]);


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
