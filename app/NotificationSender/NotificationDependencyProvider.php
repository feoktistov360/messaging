<?php

namespace App\NotificationSender;

use App\NotificationSender\Business\NotificationMethodProvider\push\AirshipNotificationMethodProvider;
use App\NotificationSender\Business\NotificationMethodProvider\sms\TwillioNotificationMethodProvider;

class NotificationDependencyProvider
{
    public static function getNotificationMethodProviders(): array
    {
        return [
            'twillio' => new TwillioNotificationMethodProvider(),
            'airship' => new AirshipNotificationMethodProvider()
        ];
    }
}
