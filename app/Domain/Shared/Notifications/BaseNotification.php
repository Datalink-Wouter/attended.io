<?php

namespace App\Domain\Shared\Notifications;

use App\Domain\User\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

abstract class BaseNotification extends Notification implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function via(User $notifiable)
    {
        return ['mail'];
    }
}
