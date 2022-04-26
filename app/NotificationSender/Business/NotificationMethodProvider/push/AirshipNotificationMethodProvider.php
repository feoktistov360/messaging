<?php

namespace App\NotificationSender\Business\NotificationMethodProvider\push;

use App\NotificationSender\Business\NotificationMethodProvider\NotificationMethodProvider;

class AirshipNotificationMethodProvider extends NotificationMethodProvider
{
    public const NAME = 'airship';

    public function send()
    {

    }

    public function getName()
    {
        return static::NAME;
    }
}
