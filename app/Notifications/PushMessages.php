<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PushMessages extends Notification implements ShouldBroadcast
{
  use Queueable;

  /**
   * Create a new notification instance.
   *
   * @return void
   */
  public $message;

  public function __construct(string $message)
  {
    $this->message = $message;
  }

  public function via($notifiable): array
  {
    return ['broadcast'];
  }

  public function toBroadcast($notifiable)
  {
    return new BroadcastMessage([
      'message' => 1
    ]);
  }
}
