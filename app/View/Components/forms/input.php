<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class input extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($name, $value, $options)
  {
    // Input Options
    $this->name = $name;
    $this->value = $value;
    $this->options = $options;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.forms.input', ['name' => $this->name, 'value' => $this->value, 'options' => $this->options]);
  }
}
