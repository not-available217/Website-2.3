<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/mijn-gegevens', function () {
    return view('mijn-gegevens');
})->middleware('auth');

Route::post('/mijn-gegevens-opslaan', function(Request $request)
{
    $user = Auth::user();
    $user->name = $request->post('name');
    $user->save();
    
    return redirect()->back()->with('success', 'Uw gegevens zijn bijgewerkt.');  
})->middleware('auth');

Route::post('/post/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/greeting', function () {
    return 'Hello World';
});
