<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class PushMessages implements ShouldBroadcast
{
  use SerializesModels;

  public  $message;

  public function __construct(string $message)
  {
    $this->message = $message;
  }

  public function broadcastOn()
  {
    return new PrivateChannel('messages');
  }
}
