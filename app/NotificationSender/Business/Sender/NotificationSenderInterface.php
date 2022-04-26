<?php

namespace App\NotificationSender\Business\Sender;

use App\NotificationSender\Shared\Transfer\Notification;

interface NotificationSenderInterface
{
    public function send(Notification $notification);
}
