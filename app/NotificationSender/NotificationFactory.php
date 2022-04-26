<?php

namespace App\NotificationSender;

use App\NotificationSender\Business\Sender\NotificationSender;
use App\NotificationSender\Business\Sender\NotificationSenderInterface;

class NotificationFactory implements NotificationFactoryInterface
{
    public function createNotificationSender(): NotificationSenderInterface
    {
        return new NotificationSender(
            NotificationDependencyProvider::getNotificationMethodProviders(),
            new NotificationConfig()
        );
    }
}
