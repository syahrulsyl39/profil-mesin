<?php

use App\Http\Controllers\Admin\ProposalController;
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

Route::get('/', function () {
    return view('backend.admin.dashboard');
});


// route proposal
Route::get("proposal", [ProposalController::class, "index"])->name("index-proposal");
Route::get("proposal/create", [ProposalController::class, "create"])->name("create-proposal");
Route::post("proposal/store", [ProposalController::class, "store"])->name("store-proposal");
