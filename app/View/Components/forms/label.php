<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class label extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($for, $text, $options)
  {
    //
    $this->for = $for;
    $this->text = $text;
    $this->options = $options;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.forms.label', ['for' => $this->for, 'text' => $this->text, 'options' => $this->options]);
  }
}
