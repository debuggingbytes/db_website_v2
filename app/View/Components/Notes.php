<?php

namespace App\View\Components;

use App\Models\Notes as ModelsNotes;
use Illuminate\View\Component;

class Notes extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $id;
  public function __construct($id)
  {
    //
    $this->id = $id;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    $notes = ModelsNotes::where('client_id', '=', $this->id)->orderBy('id', 'DESC')->get();
    return view('components.notes', ['notes' => $notes, 'id' => $this->id]);
  }
}
