<?php

namespace App\NotificationSender;

use App\NotificationSender\Shared\NotificationConstants;
use Illuminate\Support\Facades\Config;

class NotificationConfig
{
    public function getMethod(): string
    {
        return Config::get(NotificationConstants::METHOD, 'sms');
    }
}
