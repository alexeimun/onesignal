<?php

namespace OneSignalNotifier\OneSignal\Test;

class EmptyNotifiable
{
    use \Illuminate\Notifications\Notifiable;

    /**
     * @return int
     */
    public function routeNotificationForOneSignal()
    {
        return '';
    }
}
