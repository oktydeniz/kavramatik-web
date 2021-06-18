<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\Categories\ColorController;
use App\Http\Controllers\Categories\DimensionController;
use App\Http\Controllers\Categories\EmotionController;
use App\Http\Controllers\Categories\NumberController;
use App\Http\Controllers\Categories\OppositeController;
use App\Http\Controllers\Categories\QuantityController;
use App\Http\Controllers\Categories\SenseController;
use App\Http\Controllers\Categories\ShapeController;
use App\Http\Controllers\Categories\DirectionController;
use App\Http\Controllers\Categories\ColorsController;

use App\Models\ColorsModel;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('dashboard');

Route::group([
    'middleware' => ['auth', 'isAdmin'],
    'prefix' => 'yonetim'
], function () {
    Route::group([
        'prefix' => 'kategoriler'
    ], function () {
        Route::get('/', [Category::class, 'index'])->name('category.index');
        /**
         * Categories Resources For Edication Tables (CRUD)
         */
        //Delete-Show Resources settings
        Route::get('renkler/{id}', [ColorController::class, 'destroy'])->whereNumber('id')->name('renkler.destroy');
        Route::resource('renkler', ColorController::class);

        Route::get('duygular/{id}', [EmotionController::class, 'destroy'])->whereNumber('id')->name('duygular.destroy');
        Route::resource('duygular', EmotionController::class);

        Route::get('sekiller/{id}', [ShapeController::class, 'destroy'])->whereNumber('id')->name('sekiller.destroy');
        Route::resource('sekiller', ShapeController::class);

        Route::get('boyutlar/{id}', [DimensionController::class, 'destroy'])->whereNumber('id')->name('boyutlar.destroy');
        Route::resource('boyutlar', DimensionController::class);

        Route::get('yonler/{id}', [DirectionController::class, 'destroy'])->whereNumber('id')->name('yonler.destroy');
        Route::resource('yonler', DirectionController::class);

        Route::get('sayilar/{id}', [NumberController::class, 'destroy'])->whereNumber('id')->name('sayilar.destroy');
        Route::resource('sayilar', NumberController::class);

        Route::get('miktarlar/{id}', [QuantityController::class, 'destroy'])->whereNumber('id')->name('miktarlar.destroy');
        Route::resource('miktarlar', QuantityController::class);

        Route::get('duyular/{id}', [SenseController::class, 'destroy'])->whereNumber('id')->name('duyular.destroy');
        Route::resource('duyular', SenseController::class);

        Route::get('zit_kavramlar/{id}', [OppositeController::class, 'destroy'])->whereNumber('id')->name('zit_kavramlar.destroy');
        Route::resource('zit_kavramlar', OppositeController::class);

        Route::get('color/{id}', [ColorsController::class, 'destroy'])->whereNumber('id')->name('color.destroy');
        Route::resource('color', ColorsController::class);
    });
});
