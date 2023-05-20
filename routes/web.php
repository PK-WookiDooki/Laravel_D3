<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Middleware\IsNotAuthenticated;
use App\Http\Middleware\IsNotVerified;
use App\Http\Middleware\IsVerified;
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

Route::middleware(IsAuthenticated::class)->group(function () {
    Route::resource("inventory", InventoryController::class);
    Route::resource('category', CategoryController::class);
    Route::resource("book", BookController::class);

    Route::controller(HomeController::class)->prefix("dashboard")->group(function () {
        Route::get('home', "home")->name("dashboard.home");
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::middleware(IsNotAuthenticated::class)->group(function () {
        Route::get("register", "register")->name("auth.register");
        Route::post("register", "store")->name('auth.store');
        Route::get('login', "login")->name("auth.login");
        Route::post("login", 'check')->name("auth.check");
        Route::get('forget', "forgotPassword")->name('auth.forgotPassword');
        Route::post('check_email', "checkEmail")->name('auth.checkEmail');
        Route::get('new_password', "newPassword")->name('auth.newPassword');
        Route::post('reset_password', 'resetPassword')->name('auth.resetPassword');
    });

    Route::middleware(IsAuthenticated::class)->group(function () {
        Route::post("logout", "logout")->name("auth.logout");

        Route::middleware(IsNotVerified::class)->group(function () {
            Route::get('change_password', 'changePassword')->name('auth.changePassword');
            Route::post('change_password', 'changingPassword')->name('auth.changingPassword');
        });


        Route::middleware(IsVerified::class)->group(function () {
            Route::get('verify_code', 'verifyCode')->name('auth.verifyCode');
            Route::post('verify_code', 'verifyingCode')->name('auth.verifyingCode');
        });
    });
});
