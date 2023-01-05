<?php

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
    if (auth()->user()) 
    {
         return view('home');
    }
    else
    {
           return view('/landing/landingpage');
    }
});
Route::get('/terms', function () {
    return view('terms');
	//return view('welcome');
});
Route::get('/aboutus', function () {
    return view('/landing/aboutus');
	//return view('welcome');
});
Route::post('/completereg', function () {
    return view('/completereg');
	//return view('welcome');
});
Route::get('/ins', function () {
    return view('/ins');
	//return view('welcome');
});
Route::get('/del', function () {
    return view('/del');
	//return view('welcome');
});
Route::get('/login', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/register2', function () {
    return view('/auth/register2');
	//return view('welcome');
});
Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/myprofile', function () {
    return view('profil');
});

Route::get('/advice', function () {
    return view('advice');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/discussion', function () {
    return view('discussion');
});
Route::get('discusschat', function () {
    return view('discusschat');
});
Route::get('/pass', function () {
    return view('pass');
});
Route::get('/pass2', function () {
    return view('pass2');
});
Route::get('/pass3', function () {
    return view('pass3');
});
Route::get('/pass4', function () {
    return view('pass4');
});
Route::get('/pass5', function () {
    return view('pass5');
});
Route::get('/pass6', function () {
    return view('pass6');
});
Route::get('/pass7', function () {
    return view('pass7');
});
Route::get('/pass8', function () {
    return view('pass8');
});
// Route::get('/discussion/socialmedia', function () {
//     return view('discussion/socialmedia');
// });
// Route::get('/discussion/marketing', function () {
//     return view('discussion/marketing');
// });
// Route::get('/discussion/graphic', function () {
//     return view('discussion/graphic');
// });
// Route::get('/discussion/digitalmarketing', function () {
//     return view('discussion/digitalmarketing');
// });
// Route::get('/discussion/marketresearch', function () {
//     return view('discussion/marketresearch');
// });
// Route::get('/discussion/business', function () {
//     return view('discussion/business');
// });
// Route::get('/discussion/branding', function () {
//     return view('discussion/branding');
// });
require __DIR__.'/auth.php';

