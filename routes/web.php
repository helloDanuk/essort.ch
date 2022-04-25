<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProtectedFilesController;

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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('/hidden/{filename}', [ProtectedFilesController::class, 'download']);
