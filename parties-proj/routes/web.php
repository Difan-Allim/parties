<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DepartmentController;
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
    return view('index');
});

Route::controller(CityController::class)->group(function () {
    Route::get('/cities', 'index');
});

Route::controller(TypeController::class)->group(function () {
    Route::get('/types', 'index');
});

Route::controller(SocialController::class)->group(function () {
    Route::get('/socials', 'index');
});

Route::controller(PurposeController::class)->group(function () {
    Route::get('/purposes', 'index');
});

Route::controller(LegalController::class)->group(function () {
    Route::get('/legals', 'index');
});

Route::controller(DiscountController::class)->group(function () {
    Route::get('/cities', 'index');
});

Route::controller(MemberController::class)->group(function () {
    Route::get('/cities', 'index');
});

Route::controller(OrganisationController::class)->group(function () {
    Route::get('/cities', 'index');
});

Route::controller(DocumentController::class)->group(function () {
    Route::get('/cities', 'index');
});

Route::controller(DepartmentController::class)->group(function () {
    Route::get('/cities', 'index');
});
