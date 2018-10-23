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

Route::pattern('alias', '[\dа-яa-z-]+');
Route::pattern('catalog', '[\dа-яa-z-]+');

Auth::routes();

Route::post('recall-send', 'RecallController@send')->name('recall.send');
Route::post('contact-send', 'ContactController@send')->name('contact.send');
Route::post('product-send', 'CatalogProductController@send')->name('product.send');
Route::post('plugin-send', 'PluginController@send')->name('plugin.send');
Route::get('sitemap.xml', 'SitemapController@xml')->name('sitemap.xml');

Route::group(['middleware' => ['redirector', 'shortcode']], function () {
    Route::get('/{alias?}', 'PageController@show')->name('page.show');
    Route::get('статьи/{alias}', 'ArticleController@show')->name('article.show');
    Route::get('услуги/{alias}', 'ServiceController@show')->name('service.show');
    Route::get('гостиничная-мебель/{alias}', 'CatalogController@show')->name('catalog.show');
    Route::get('гостиничная-мебель/{catalog}/{alias}', 'CatalogController@sub')->name('catalog.sub');
    Route::get('продукт/{alias}', 'CatalogProductController@show')->name('catalog_product.show');
    Route::get('мебель-для-гостиниц-и-отелей/{alias}', 'ReadySolutionController@show')->name('ready_solution.show');
});

Route::group(['prefix' => '_root', 'middleware' => 'auth', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::get('', 'HomeController@home')->name('home');

    Route::post('upload-ckeditor', 'CkeditorController@upload')->name('upload-ckeditor');

    foreach (glob(app_path('Domain/**/routes.php')) as $item) {
        require $item;
    }
});