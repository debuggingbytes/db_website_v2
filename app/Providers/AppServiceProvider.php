<?php

namespace App\Providers;

use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Server;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    //
    $portfolio = Portfolio::all();
    $server = Server::findOrFail(1);
    $clients = Client::all();
    View::share(['portfolio' => $portfolio, 'server' => $server, 'clients' => $clients]);
  }
}
