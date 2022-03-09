<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PushAlerts implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;




  /**
   * Create a new event instance.
   *
   * @return void
   */
  public $broadcast;

  public function __construct($message)
  {
    //
    return $this->broadcast = $message;
  }

  /**
   * Get the channels the event should broadcast on.
   *
   * @return \Illuminate\Broadcasting\Channel|array
   */
  public function broadcastOn()
  {
    return new PrivateChannel('alerts');
  }
}
