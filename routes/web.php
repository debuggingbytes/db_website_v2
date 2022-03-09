<?php

use App\Http\Controllers\ChangeUserPassword;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SendMail;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServerController;
use App\Models\Service;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// DebuggingBytes main site
Route::get('/', function () {
  $services = Service::all();
  return view('home', ['services' => $services]);
  // return redirect(route('dashboard'));
})->name('home');

Route::post('/send-mail', [SendMail::class, 'sendMail'])->name('send_mail');


// DB Dashboard  login required to view all page
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

  // Main main for dashboard
  Route::get('/dashboard', function () {

    if (!Auth::user()->is_admin) {
      $client = Client::findOrFail(Auth::user()->client_id);
      return view('client_dashboard', ['client' => $client]);
    }

    return view('dashboard');
  })->name('dashboard');

  Route::get('/login/demo-user', function () {
    Auth::loginUsingId();
  });
  Route::get('/login/demo-admin', function () {
    Auth::loginUsingId();
  });


  Route::prefix('/dashboard')->group(function () {
    // Server configuration routes
    Route::resource('service', ServiceController::class);
    Route::resource('server', ServerController::class);
    Route::resource('portfolio', PortfolioController::class);

    //Client configuration routes
    Route::resource('client', ClientController::class);
    Route::resource('note', NoteController::class);
  });

  Route::post('change-password', [ChangeUserPassword::class, 'changePassword'])->name('change.password');
});
