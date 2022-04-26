<?php

namespace App\NotificationSender;

use App\NotificationSender\Shared\Transfer\Notification;

class NotificationFacade implements NotificationFacadeInterface
{
    public NotificationFactoryInterface $factory;

    public function __construct(NotificationFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function send(Notification $notification)
    {
        $this->factory->createNotificationSender()->send($notification);
    }
}
