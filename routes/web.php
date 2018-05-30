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

/*
	* ROUTE Website
	*
*/

Route::get('/', 'WebsiteController@index')->name('index');

Route::get('/tarif', 'WebsiteController@showTarif')->name('tarif');

Route::get('/contact', 'WebsiteController@contact')->name('contact');
Route::post('/contact', 'WebsiteController@contactForm')->name('contactPost');

Route::get('/who', 'WebsiteController@whoAre')->name('who');

Route::post('/addmail', 'WebsiteController@addToNewsletter');

Route::get('/unsubscribe/{id}', 'WebsiteController@Unsubscribe');

Route::get('/galerie', 'WebsiteController@showGalery')->name('galerie');

/*
 * Route BACK
 */

Route::get('/back', 'BackController@index')->name('indexBack');
Route::get('/back/newsletter', 'BackController@newsletter')->name('newsletter');

Route::get('/back/stat', 'BackController@stat')->name('stat');



/*
	* ROUTE ECOMMERCE
	*
*/





/*
	* ROUTE ENCAISSEMENT
	*
*/
Route::get('/boutique', 'BoutiqueController@index');
Route::get('/front', 'FrontController@index');
Route::post('/show/{id}', 'FrontController@showCategory');
Route::post('/add', 'CartController@add');
Route::post('/panier', 'FrontController@showPanier');