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
use App\Http\Controllers\QueryController;
use App\Http\Controllers\UserController;
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

Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::controller(QueryController::class)->group(function () {
    Route::get('/queries', 'index');
    Route::get('/queries/inner_join_1', 'inner_join_1');
    Route::post('/queries/inner_join_1', 'inner_join_1_post');

    Route::get('/queries/inner_join_2', 'inner_join_2');
    Route::post('/queries/inner_join_2', 'inner_join_2_post');

    Route::get('/queries/inner_join_3', 'inner_join_3');
    Route::post('/queries/inner_join_3', 'inner_join_3_post');


    Route::get('/queries/inner_join_4', 'inner_join_4');
    Route::post('/queries/inner_join_4', 'inner_join_4_post');

    Route::get('/queries/inner_join_5', 'inner_join_5');

    Route::get('/queries/inner_join_6', 'inner_join_6');

    Route::get('/queries/inner_join_7', 'inner_join_7');

    Route::get('/queries/left_join', 'left_join');

    Route::get('/queries/right_join', 'right_join');

    Route::get('/queries/select_in_select', 'select_in_select');

    Route::get('/queries/aggregate_no_condition', 'aggregate_no_condition');

    Route::get('/queries/aggregate_condition_data', 'aggregate_condition_data');
    Route::post('/queries/aggregate_condition_data', 'aggregate_condition_data_post');

    Route::get('/queries/aggregate_condition_group', 'aggregate_condition_group');

    Route::get('/queries/aggregate_condition_both', 'aggregate_condition_both');
    Route::post('/queries/aggregate_condition_both', 'aggregate_condition_both_post');

    Route::get('/queries/aggregate_mishmash', 'aggregate_mishmash');
    Route::post('/queries/aggregate_mishmash', 'aggregate_mishmash_post');

    Route::get('/queries/aggregate_subquery', 'aggregate_subquery');
    Route::post('/queries/aggregate_subquery', 'aggregate_subquery_post');



});

Route::controller(CityController::class)->group(function () {
    Route::get('/cities/create', 'create')->middleware('auth');
    Route::post('/cities', 'store')->middleware('auth');
    Route::get('/cities', 'index');
    Route::get('/cities/{city}/edit', 'edit')->middleware('auth');
    Route::put('/cities/{city}', 'update')->middleware('auth');
    Route::delete('/cities/{city}', 'destroy')->middleware('auth');
    Route::get('/cities/{city}', 'show');
});

Route::controller(TypeController::class)->group(function () {
    Route::get('/types/create', 'create')->middleware('auth');
    Route::post('/types', 'store')->middleware('auth');
    Route::get('/types', 'index');
    Route::get('/types/{type}/edit', 'edit')->middleware('auth');
    Route::put('/types/{type}', 'update')->middleware('auth');
    Route::delete('/types/{type}', 'destroy')->middleware('auth');
    Route::get('/types/{type}', 'show');
});

Route::controller(SocialController::class)->group(function () {
    Route::get('/socials/create', 'create')->middleware('auth');
    Route::post('/socials', 'store')->middleware('auth');
    Route::get('/socials', 'index');
    Route::get('/socials/{social}/edit', 'edit')->middleware('auth');
    Route::put('/socials/{social}', 'update')->middleware('auth');
    Route::delete('/socials/{social}', 'destroy')->middleware('auth');
    Route::get('/socials/{social}', 'show');
});

Route::controller(PurposeController::class)->group(function () {
    Route::get('/purposes/create', 'create')->middleware('auth');
    Route::post('/purposes', 'store')->middleware('auth');
    Route::get('/purposes', 'index');
    Route::get('/purposes/{purpose}/edit', 'edit')->middleware('auth');
    Route::put('/purposes/{purpose}', 'update')->middleware('auth');
    Route::delete('/purposes/{purpose}', 'destroy')->middleware('auth');
    Route::get('/purposes/{purpose}', 'show');
});

Route::controller(LegalController::class)->group(function () {
    Route::get('/legals/create', 'create')->middleware('auth');
    Route::post('/legals', 'store')->middleware('auth');
    Route::get('/legals', 'index');
    Route::get('/legals/{legal}/edit', 'edit')->middleware('auth');
    Route::put('/legals/{legal}', 'update')->middleware('auth');
    Route::delete('/legals/{legal}', 'destroy')->middleware('auth');
    Route::get('/legals/{legal}', 'show');
});

Route::controller(DiscountController::class)->group(function () {
    Route::get('/discounts/create', 'create')->middleware('auth');
    Route::post('/discounts', 'store')->middleware('auth');
    Route::get('/discounts', 'index');
    Route::get('/discounts/{discount}/edit', 'edit')->middleware('auth');
    Route::put('/discounts/{discount}', 'update')->middleware('auth');
    Route::delete('/discounts/{discount}', 'destroy')->middleware('auth');
    Route::get('/discounts/{discount}', 'show');
});

Route::controller(MemberController::class)->group(function () {
    Route::get('/members/create', 'create')->middleware('auth');
    Route::post('/members', 'store')->middleware('auth');
    Route::get('/members', 'index');
    Route::get('/members/{member}/edit', 'edit')->middleware('auth');
    Route::put('/members/{member}', 'update')->middleware('auth');
    Route::delete('/members/{member}', 'destroy')->middleware('auth');
    Route::get('/members/{member}', 'show');
});

Route::controller(OrganisationController::class)->group(function () {
    Route::get('/organisations/create', 'create')->middleware('auth');
    Route::post('/organisations', 'store')->middleware('auth');
    Route::get('/organisations', 'index');
    Route::get('/organisations/{organisation}/edit', 'edit')->middleware('auth');
    Route::put('/organisations/{organisation}', 'update')->middleware('auth');
    Route::delete('/organisations/{organisation}', 'destroy')->middleware('auth');
    Route::get('/organisations/{organisation}', 'show');
});

Route::controller(DocumentController::class)->group(function () {
    Route::get('/documents/create', 'create')->middleware('auth');
    Route::post('/documents', 'store')->middleware('auth');
    Route::get('/documents', 'index');
    Route::get('/documents/{document}/edit', 'edit')->middleware('auth');
    Route::put('/documents/{document}', 'update')->middleware('auth');
    Route::delete('/documents/{document}', 'destroy')->middleware('auth');
    Route::get('/documents/{document}', 'show');
});

Route::controller(DepartmentController::class)->group(function () {
    Route::get('/departments/create', 'create')->middleware('auth');
    Route::post('/departments', 'store')->middleware('auth');
    Route::get('/departments', 'index');
    Route::get('/departments/{department}/edit', 'edit')->middleware('auth');
    Route::put('/departments/{department}', 'update')->middleware('auth');
    Route::delete('/departments/{department}', 'destroy')->middleware('auth');
    Route::get('/departments/{department}', 'show');
});
