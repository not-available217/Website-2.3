<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

Route::get('/genereer-token', function () {
    return view('genereer-token');
})->middleware('auth');

Route::get('/tokens', function()
{
    $tokens = \App\Models\Token::all();
    return view('token-overzicht', ["tokens" => $tokens]);
})->middleware('auth');

Route::get('/v1/request-weather-data/{token}', function ($token)
{
    $tokenObject = DB::table('tokens')->where('token','=',$token)->get();
    if($tokenObject == null)
        return response()->json(['error' => 'Unauthenticated.'], 401);
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA',
    ]);
});

Route::any('/postWeatherData', function(Request $request)
{
    Log::debug($request);
});

Route::post('/mijn-gegevens-opslaan', function(Request $request)
{
    $user = Auth::user();
    $user->name = $request->post('name');
    $user->save();
    
    return redirect()->back()->with('success', 'Uw gegevens zijn bijgewerkt.');  
})->middleware('auth');

Route::post('/genereer-token', function(Request $request)
{
    $contract = (int)$request->post('contract');
    $token = new App\Models\Token();
    $token->contract = $contract;
    $token->token = Str::random(64);
    $token->save();
    return redirect()->back()->with('success', 'Token is aangemaakt! De token betreft: ' . $token->token);  
})->middleware('auth');

Route::post('/post/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/greeting', function () {
    return 'Hello World';
});
