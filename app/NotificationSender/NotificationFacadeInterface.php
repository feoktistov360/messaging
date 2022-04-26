<?php

namespace App\NotificationSender;

use App\NotificationSender\Shared\Transfer\Notification;

interface NotificationFacadeInterface
{
    public function send(Notification $notification);
}
