<?php

namespace OneSignalNotifier\OneSignal\Test;

use Illuminate\Notifications\Notification;
use OneSignalNotifier\OneSignal\OneSignalMessage;

class TestNotification extends Notification
{
    public function toOneSignal($notifiable)
    {
        return (new OneSignalMessage('Body'))
            ->subject('Subject')
            ->icon('Icon')
            ->url('URL');
    }
}
