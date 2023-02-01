<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [LandingController::class, 'index']);
// Route::get('/', [LandingController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

Route::resource('blogs', BlogController::class);

Route::resource('mentors', MentorController::class);

// Route::middleware('auth')->group(function () {
//     Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');
//     Route::get('/mentors/create', [MentorController::class, 'create'])->name('mentors.create');
//     Route::post('mentors/{id}', function ($id) {
//         Route::get('users/{id}', function ($id) {
            
//         });
//     });
// });

// Route::post('mentors', 'MentorController@store');
// Route::get('mentors/{id}', 'MentorController@show');
// Route::get('mentors/{id}/edit', 'MentorController@edit');
// Route::put('mentors/{id}', 'MentorController@update');
// Route::delete('mentors/{id}', 'MentorController@destroy');


require __DIR__ . '/auth.php';
