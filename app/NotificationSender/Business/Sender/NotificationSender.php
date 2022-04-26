<?php

namespace App\NotificationSender\Business\Sender;

use App\NotificationSender\NotificationConfig;
use App\NotificationSender\Shared\Transfer\Notification;

class NotificationSender implements NotificationSenderInterface
{
    public array $notificationMethodProviders;

    public NotificationConfig $config;

    public function __construct(array $notificationMethodProviders, NotificationConfig $config)
    {
        $this->notificationMethodProviders = $notificationMethodProviders;
        $this->config = $config;
    }

    public function send(Notification $notification)
    {
        foreach ($this->notificationMethodProviders as $methodProvider) {
            if ($methodProvider::NAME === $this->config->getMethod()) {
                $methodProvider->send($notification);
                return;
            }
        }
    }
}
