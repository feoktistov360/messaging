<?php

namespace App\NotificationSender\Business\NotificationMethodProvider\sms;

use App\NotificationSender\Business\NotificationMethodProvider\NotificationMethodProvider;

class TwillioNotificationMethodProvider extends NotificationMethodProvider
{
    public const NAME = 'twillio';

    public function send()
    {

    }

    public function getName()
    {
        return static::NAME;
    }
}
