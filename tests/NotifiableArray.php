<?php

namespace OneSignalNotifier\OneSignal\Test;

class NotifiableArray
{
    use \Illuminate\Notifications\Notifiable;

    /**
     * @return int
     */
    public function routeNotificationForOneSignal()
    {
        return ['player_id_1', 'player_id_2'];
    }
}
