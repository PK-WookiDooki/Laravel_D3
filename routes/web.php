<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
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

Route::get("/", [PageController::class, "index"])->name("page.index");



// Route::prefix("inventory")->controller(ItemController::class)->group(function() {
//     Route::get('/',"index")->name("inventory.index");
//     Route::post('/','store')->name('inventory.store');
//     Route::get("/create","create")->name("inventory.create");
//     Route::get("/{id}","show")->name("inventory.show");
//     Route::delete("/{id}","destroy")->name("inventory.destroy");
//     Route::get("/{id}/edit","edit")->name("inventory.edit");
//     Route::put("/{id}","update")->name("inventory.update");
// });

// Route::resource('inventory', ItemController::class);

Route::resource("inventory", InventoryController::class);
Route::resource('category', CategoryController::class);
Route::resource("book", BookController::class);
