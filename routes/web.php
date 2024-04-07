<?php

use App\Http\Controllers\CrudOperations;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('crud.index');
})->name('index');


Route::get('/crud/home', [CrudOperations::class, 'home'])->name('crud.home');

Route::resource('/crud', CrudOperations::class)->parameters([
    'crud' => 'anime'
]);
// Define a POST route for crud/store
Route::post('crud/store', [CrudOperations::class, 'store'])->name('crud.store');
// Explicitly define the PUT route for the update method
Route::put('/crud/{anime}', [CrudOperations::class, 'update'])->name('crud.update');
