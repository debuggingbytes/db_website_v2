<?php

namespace App\View\Components;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ClientView extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */

  public function __construct()
  {
    //
    // $this->id = $id;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    $client = Client::findOrFail(Auth::user()->client_id);
    return view('components.client-view', ['client' => $client]);
  }
}
