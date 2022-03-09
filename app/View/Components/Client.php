<?php

namespace App\View\Components;

use App\Models\Client as ModelsClient;
use Illuminate\View\Component;

class Client extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */
  // public $id;
  public function __construct($id)
  {
    //
    $this->client = $id;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {

    $client = ModelsClient::findOrFail($this->client);
    return view('components.client', ['client' => $client]);
  }
}
