<?php

use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, config('app.locales'))) {
        Session::put('locale', $locale);
        app()->setLocale($locale); // Set the application's locale
    }

    return redirect()->back(); // Redirect back to the previous page
})->name('switch-language');


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Auth::routes();

Route::get('/login/phone', 'App\Http\Controllers\Auth\LoginController@phone')->name('login.phone');
Route::post('/login/phone', 'App\Http\Controllers\Auth\LoginController@verify');

Route::get('/verify/{token}', 'App\Http\Controllers\Auth\RegisterController@verify')->name('register.verify');

Route::get('/login/{network}', 'App\Http\Controllers\Auth\NetworkController@redirect')->name('login.network');
Route::get('/login/{network}/callback', 'App\Http\Controllers\Auth\NetworkController@callback');

Route::get('/banner/get', 'BannerController@get')->name('banner.get');
Route::get('/banner/{banner}/click', 'BannerController@click')->name('banner.click');

Route::group([
    'prefix' => 'adverts',
    'as' => 'adverts.',
    'namespace' => 'Adverts',
], function () {
    Route::get('/show/{advert}', 'AdvertController@show')->name('show');
    Route::post('/show/{advert}/phone', 'AdvertController@phone')->name('phone');
    Route::post('/show/{advert}/favorites', 'FavoriteController@add')->name('favorites');
    Route::delete('/show/{advert}/favorites', 'FavoriteController@remove');

    Route::get('/{adverts_path?}', 'AdvertController@index')->name('index')->where('adverts_path', '.+');
});

Route::group(
    [
        'prefix' => 'cabinet',
        'as' => 'cabinet.',
        'namespace' => 'App\Http\Controllers\Cabinet',
        'middleware' => ['auth'],
    ],
    function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::get('/', 'ProfileController@index')->name('home');
            Route::get('/edit', 'ProfileController@edit')->name('edit');
            Route::put('/update', 'ProfileController@update')->name('update');
            Route::post('/phone', 'PhoneController@request');
            Route::get('/phone', 'PhoneController@form')->name('phone');
            Route::put('/phone', 'PhoneController@verify')->name('phone.verify');

            Route::post('/phone/auth', 'PhoneController@auth')->name('phone.auth');
        });

        Route::get('favorites', 'FavoriteController@index')->name('favorites.index');
        Route::delete('favorites/{advert}', 'FavoriteController@remove')->name('favorites.remove');

        Route::resource('tickets', 'TicketController')->only(['index', 'show', 'create', 'store', 'destroy']);
        Route::post('tickets/{ticket}/message', 'TicketController@message')->name('tickets.message');

        Route::group([
            'prefix' => 'adverts',
            'as' => 'adverts.',
            'namespace' => 'Adverts',
            'middleware' => [App\Http\Middleware\FilledProfile::class],
        ], function () {
            Route::get('/', 'AdvertController@index')->name('index');
            Route::get('/create', 'CreateController@category')->name('create');
            Route::get('/create/region/{category}/{region?}', 'CreateController@region')->name('create.region');
            Route::get('/create/advert/{category}/{region?}', 'CreateController@advert')->name('create.advert');
            Route::post('/create/advert/{category}/{region?}', 'CreateController@store')->name('create.advert.store');

            Route::get('/{advert}/edit', 'ManageController@editForm')->name('edit');
            Route::put('/{advert}/edit', 'ManageController@edit');
            Route::get('/{advert}/photos', 'ManageController@photosForm')->name('photos');
            Route::post('/{advert}/photos', 'ManageController@photos');
            Route::get('/{advert}/attributes', 'ManageController@attributesForm')->name('attributes');
            Route::post('/{advert}/attributes', 'ManageController@attributes');
            Route::post('/{advert}/send', 'ManageController@send')->name('send');
            Route::post('/{advert}/close', 'ManageController@close')->name('close');
            Route::delete('/{advert}/destroy', 'ManageController@destroy')->name('destroy');
        });

        Route::group([
            'prefix' => 'banners',
            'as' => 'banners.',
            'namespace' => 'Banners',
            'middleware' => [App\Http\Middleware\FilledProfile::class],
        ], function () {
            Route::get('/', 'BannerController@index')->name('index');
            Route::get('/create', 'CreateController@category')->name('create');
            Route::get('/create/region/{category}/{region?}', 'CreateController@region')->name('create.region');
            Route::get('/create/banner/{category}/{region?}', 'CreateController@banner')->name('create.banner');
            Route::post('/create/banner/{category}/{region?}', 'CreateController@store')->name('create.banner.store');

            Route::get('/show/{banner}', 'BannerController@show')->name('show');
            Route::get('/{banner}/edit', 'BannerController@editForm')->name('edit');
            Route::put('/{banner}/edit', 'BannerController@edit');
            Route::get('/{banner}/file', 'BannerController@fileForm')->name('file');
            Route::put('/{banner}/file', 'BannerController@file');
            Route::post('/{banner}/send', 'BannerController@send')->name('send');
            Route::post('/{banner}/cancel', 'BannerController@cancel')->name('cancel');
            Route::post('/{banner}/order', 'BannerController@order')->name('order');
            Route::delete('/{banner}/destroy', 'BannerController@destroy')->name('destroy');
        });
    }
);

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'namespace' => 'App\Http\Controllers\Admin',
        'middleware' => ['auth', 'can:admin-panel'],
    ],
    function () {
        Route::post('/ajax/upload/image', 'UploadController@image')->name('ajax.upload.image');

        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('users', 'UsersController');
        Route::post('/users/{user}/verify', 'UsersController@verify')->name('users.verify');
        Route::post('/users/{user}/block', 'UsersController@block')->name('users.block');
        Route::post('/users/{user}/unblock', 'UsersController@unblock')->name('users.unblock');

        Route::resource('regions', 'RegionController');

        Route::resource('pages', 'PageController');

        Route::group(['prefix' => 'pages/{page}', 'as' => 'pages.'], function () {
            Route::post('/first', 'App\Http\ControllersPageController@first')->name('first');
            Route::post('/up', 'App\Http\Controllers\PageController@up')->name('up');
            Route::post('/down', 'App\Http\Controllers\PageController@down')->name('down');
            Route::post('/last', 'App\Http\Controllers\PageController@last')->name('last');
        });



        Route::group(['prefix' => 'adverts', 'as' => 'adverts.', 'namespace' => 'Adverts'], function () {

            Route::resource('categories', 'CategoryController');

            Route::group(['prefix' => 'categories/{category}', 'as' => 'categories.'], function () {
                Route::post('/first', 'CategoryController@first')->name('first');
                Route::post('/up', 'CategoryController@up')->name('up');
                Route::post('/down', 'CategoryController@down')->name('down');
                Route::post('/last', 'CategoryController@last')->name('last');
                Route::post('/remove', 'CategoryController@remove')->name('remove');
                Route::post('/insert', 'CategoryController@insert')->name('insert');
                Route::resource('attributes', 'AttributeController')->except('index');
            });

            Route::get('/category-name', 'CategoryNameController@index')->name('category_name_index');

            Route::group(['prefix' => 'adverts', 'as' => 'adverts.', 'namespace' => 'Adverts'], function () {
                Route::get('/', 'AdvertController@index')->name('index');
                Route::get('/{advert}/edit', 'AdvertController@editForm')->name('edit');
                Route::put('/{advert}/edit', 'AdvertController@edit');
                Route::get('/{advert}/photos', 'AdvertController@photosForm')->name('photos');
                Route::post('/{advert}/photos', 'AdvertController@photos');
                Route::get('/{advert}/attributes', 'AdvertController@attributesForm')->name('attributes');
                Route::post('/{advert}/attributes', 'AdvertController@attributes');
                Route::post('/{advert}/moderate', 'AdvertController@moderate')->name('moderate');
                Route::get('/{advert}/reject', 'AdvertController@rejectForm')->name('reject');
                Route::post('/{advert}/reject', 'AdvertController@reject');
                Route::delete('/{advert}/destroy', 'AdvertController@destroy')->name('destroy');
            });
        });

        Route::group(['prefix' => 'banners', 'as' => 'banners.'], function () {
            Route::get('/', 'BannerController@index')->name('index');
            Route::get('/{banner}/show', 'BannerController@show')->name('show');
            Route::get('/{banner}/edit', 'BannerController@editForm')->name('edit');
            Route::put('/{banner}/edit', 'BannerController@edit');
            Route::post('/{banner}/moderate', 'BannerController@moderate')->name('moderate');
            Route::get('/{banner}/reject', 'BannerController@rejectForm')->name('reject');
            Route::post('/{banner}/reject', 'BannerController@reject');
            Route::post('/{banner}/pay', 'BannerController@pay')->name('pay');
            Route::delete('/{banner}/destroy', 'BannerController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'tickets', 'as' => 'tickets.'], function () {
            Route::get('/', 'TicketController@index')->name('index');
            Route::get('/{ticket}/show', 'TicketController@show')->name('show');
            Route::get('/{ticket}/edit', 'TicketController@editForm')->name('edit');
            Route::put('/{ticket}/edit', 'TicketController@edit');
            Route::post('{ticket}/message', 'TicketController@message')->name('message');
            Route::post('/{ticket}/close', 'TicketController@close')->name('close');
            Route::post('/{ticket}/approve', 'TicketController@approve')->name('approve');
            Route::post('/{ticket}/reopen', 'TicketController@reopen')->name('reopen');
            Route::delete('/{ticket}/destroy', 'TicketController@destroy')->name('destroy');
        });


        Route::group(['prefix' => 'real-estate', 'as' => 'real-estates.'], function () {


        Route::group(['prefix' => 'type', 'as' => 'type.'], function () {
            Route::get('/', 'RealEstateController@index')->name('index');
//            Route::get('/{ticket}/show', 'TicketController@show')->name('show');
//            Route::get('/{ticket}/edit', 'TicketController@editForm')->name('edit');
//            Route::put('/{ticket}/edit', 'TicketController@edit');
            Route::get('/add-form', 'RealEstateController@store')->name('add-form');
//            Route::post('/insert', 'TicketController@close')->name('close');
//            Route::post('/{ticket}/approve', 'TicketController@approve')->name('approve');
//            Route::post('/{ticket}/reopen', 'TicketController@reopen')->name('reopen');
//            Route::delete('/{ticket}/destroy', 'TicketController@destroy')->name('destroy');
        });
});
        Route::group(['prefix' => 'car/model', 'as' => 'car.model.'], function () {
            Route::get('/', 'CarModelController@index')->name('index');
            Route::get('/{car}/show', 'CarmodelController@show')->name('show');
            Route::get('/{car}/edit', 'CarmodelController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarmodelController@edit');
            Route::post('{car}/message', 'CarmodelController@message')->name('message');
            Route::post('/{car}/close', 'CarmodelController@close')->name('close');
            Route::post('/{car}/approve', 'CarmodelController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarmodelController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarmodelController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'car/wheels', 'as' => 'car.wheels.'], function () {
            Route::get('/', 'CarWheelsController@index')->name('index');
            Route::get('/{car}/show', 'CarWheelsController@show')->name('show');
            Route::get('/{car}/edit', 'CarWheelsController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarWheelsController@edit');
            Route::post('{car}/message', 'CarWheelsController@message')->name('message');
            Route::post('/{car}/close', 'CarWheelsController@close')->name('close');
            Route::post('/{car}/approve', 'CarWheelsController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarWheelsController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarWheelsController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'car/interior', 'as' => 'car.interior.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });


        Route::group(['prefix' => 'car/headlights', 'as' => 'car.headlights.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });


        Route::group(['prefix' => 'car/sunroof', 'as' => 'car.sunroof.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'car/comfort', 'as' => 'car.comfort.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'car/transmission', 'as' => 'car.transmission.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'car/drive', 'as' => 'car.drive.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });


        Route::group(['prefix' => 'car/type', 'as' => 'car.type.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'car/engine', 'as' => 'car.engine.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'car/engine/type', 'as' => 'car.engine.type.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });

        Route::group(['prefix' => 'car/condition', 'as' => 'car.condition.'], function () {
            Route::get('/', 'CarInteriorController@index')->name('index');
            Route::get('/{car}/show', 'CarInteriorController@show')->name('show');
            Route::get('/{car}/edit', 'CarInteriorController@editForm')->name('edit');
            Route::put('/{car}/edit', 'CarInteriorController@edit');
            Route::post('{car}/message', 'CarInteriorController@message')->name('message');
            Route::post('/{car}/close', 'CarInteriorController@close')->name('close');
            Route::post('/{car}/approve', 'CarInteriorController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarInteriorController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarInteriorController@destroy')->name('destroy');
        });


        Route::group(['prefix' => 'car/gas', 'as' => 'car.gas.','namespace' => 'Car'], function () {
            Route::get('/', 'CarGasController@index')->name('index');
            Route::get('/create', 'CarGasController@create')->name('create');
            Route::post('/store', 'CarGasController@store')->name('store');
            Route::get('/{car}/show', 'CarGasController@show')->name('show');
            Route::get('/{car}/edit', 'CarGasController@edit')->name('edit');
            Route::put('/{car}/edit', 'CarGasController@edit');
            Route::post('{car}/message', 'CarGasController@message')->name('message');
            Route::post('/{car}/close', 'CarGasController@close')->name('close');
            Route::post('/{car}/approve', 'CarGasController@approve')->name('approve');
            Route::post('/{car}/reopen', 'CarGasController@reopen')->name('reopen');
            Route::delete('/{car}/destroy', 'CarGasController@destroy')->name('destroy');
        });
        Route::get('/showtoindex', 'App\Http\Controllers\HomeController@single')->name('product')->where('page_path', '.+');


    }
);
Route::get('/add', 'App\Http\Controllers\Cabinet\Add\AddPostController@index')->name('add');
Route::get('/add/post', 'App\Http\Controllers\Cabinet\Add\AddPostController@add')->name('post');
Route::get('/add/success', 'App\Http\Controllers\Cabinet\Add\AddPostController@success')->name('success');
Route::get('/business', [BusinessController::class, 'index'])->name('business');
Route::get('/business/{id}', [BusinessController::class, 'current'])->name('business/current');

Route::get('/product/slug', 'App\Http\Controllers\HomeController@single')->name('product')->where('page_path', '.+');
Route::get('/product/bazhin', 'App\Http\Controllers\HomeController@bajin')->name('bajin')->where('page_path', '.+');
Route::get('/admin/blockuser', 'App\Http\Controllers\HomeController@bajin')->name('block-user')->where('page_path', '.+');

//Route::get('/{page_path}', 'App\Http\Controllers\PageController@show')->name('page')->where('page_path', '.+');

