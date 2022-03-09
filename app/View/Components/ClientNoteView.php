<?php

namespace App\View\Components;

use App\Models\Note;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ClientNoteView extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $id;

  public function __construct()
  {
    //

  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    $notes = Note::where('client_id', '=', Auth::user()->client_id)->orderBy('id', 'DESC')->get();
    return view('components.client-note-view', ['notes' => $notes, 'id' => $this->id]);
  }
}
