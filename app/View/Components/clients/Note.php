<?php

namespace App\View\Components\clients;

use App\Models\Note as ModelsNote;
use Illuminate\View\Component;

class Note extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */

  public $note;
  public function __construct($note)
  {
    //
    $this->note = $note;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    // $note = ModelsNote::findOrFail($this->note);
    return view('components.clients.note', ['note' => $this->note]);
  }
}
