<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{


  public $cardText, $cardColour, $cardName, $cardIcon;

  public function __construct($cardName, $cardText, $cardColour, $cardIcon)
  {
    //
    $this->cardName = $cardName;
    $this->cardText = $cardText;
    $this->cardColour = $cardColour;
    $this->cardIcon = $cardIcon;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.card');
  }
}
