<?php

namespace App\NotificationSender;

use App\NotificationSender\Business\Sender\NotificationSenderInterface;

interface NotificationFactoryInterface
{
    public function createNotificationSender(): NotificationSenderInterface;
}
