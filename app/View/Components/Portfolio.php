<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Portfolio extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $name, $url, $img, $text;
  public function __construct($name, $url, $img, $text)
  {
    //
    $this->name = $name;
    $this->url = $url;
    $this->img = $img;
    $this->text = $text;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.portfolio');
  }
}
