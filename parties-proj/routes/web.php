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
    Route::get('/cities/create', 'create');
    Route::post('/cities', 'store');
    Route::get('/cities', 'index');
    Route::get('/cities/{city}/edit', 'edit');
    Route::put('/cities/{city}', 'update');
    Route::delete('/cities/{city}', 'destroy');
    Route::get('/cities/{city}', 'show');
});

Route::controller(TypeController::class)->group(function () {
    Route::get('/types/create', 'create');
    Route::post('/types', 'store');
    Route::get('/types', 'index');
    Route::get('/types/{type}/edit', 'edit');
    Route::put('/types/{type}', 'update');
    Route::delete('/types/{type}', 'destroy');
    Route::get('/types/{type}', 'show');
});

Route::controller(SocialController::class)->group(function () {
    Route::get('/socials/create', 'create');
    Route::post('/socials', 'store');
    Route::get('/socials', 'index');
    Route::get('/socials/{social}/edit', 'edit');
    Route::put('/socials/{social}', 'update');
    Route::delete('/socials/{social}', 'destroy');
    Route::get('/socials/{social}', 'show');
});

Route::controller(PurposeController::class)->group(function () {
    Route::get('/purposes/create', 'create');
    Route::post('/purposes', 'store');
    Route::get('/purposes', 'index');
    Route::get('/purposes/{purpose}/edit', 'edit');
    Route::put('/purposes/{purpose}', 'update');
    Route::delete('/purposes/{purpose}', 'destroy');
    Route::get('/purposes/{purpose}', 'show');
});

Route::controller(LegalController::class)->group(function () {
    Route::get('/legals/create', 'create');
    Route::post('/legals', 'store');
    Route::get('/legals', 'index');
    Route::get('/legals/{legal}/edit', 'edit');
    Route::put('/legals/{legal}', 'update');
    Route::delete('/legals/{legal}', 'destroy');
    Route::get('/legals/{legal}', 'show');
});

Route::controller(DiscountController::class)->group(function () {
    Route::get('/discounts/create', 'create');
    Route::post('/discounts', 'store');
    Route::get('/discounts', 'index');
    Route::get('/discounts/{discount}/edit', 'edit');
    Route::put('/discounts/{discount}', 'update');
    Route::delete('/discounts/{discount}', 'destroy');
    Route::get('/discounts/{discount}', 'show');
});

Route::controller(MemberController::class)->group(function () {
    Route::get('/members/create', 'create');
    Route::post('/members', 'store');
    Route::get('/members', 'index');
    Route::get('/members/{member}/edit', 'edit');
    Route::put('/members/{member}', 'update');
    Route::delete('/members/{member}', 'destroy');
    Route::get('/members/{member}', 'show');
});

Route::controller(OrganisationController::class)->group(function () {
    Route::get('/organisations/create', 'create');
    Route::post('/organisations', 'store');
    Route::get('/organisations', 'index');
    Route::get('/organisations/{organisation}/edit', 'edit');
    Route::put('/organisations/{organisation}', 'update');
    Route::delete('/organisations/{organisation}', 'destroy');
    Route::get('/organisations/{organisation}', 'show');
});

Route::controller(DocumentController::class)->group(function () {
    Route::get('/documents/create', 'create');
    Route::post('/documents', 'store');
    Route::get('/documents', 'index');
    Route::get('/documents/{document}/edit', 'edit');
    Route::put('/documents/{document}', 'update');
    Route::delete('/documents/{document}', 'destroy');
    Route::get('/documents/{document}', 'show');
});

Route::controller(DepartmentController::class)->group(function () {
    Route::get('/departments/create', 'create');
    Route::post('/departments', 'store');
    Route::get('/departments', 'index');
    Route::get('/departments/{department}/edit', 'edit');
    Route::put('/departments/{department}', 'update');
    Route::delete('/departments/{department}', 'destroy');
    Route::get('/departments/{department}', 'show');
});
