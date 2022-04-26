<?php

namespace App\NotificationSender\Business\Mapper;

use App\NotificationSender\Shared\Transfer\Notification;
use Symfony\Component\HttpFoundation\Request;

class RequestToNotificationMapper implements RequestToNotificationMapperInterface
{
    public function mapRequestToNotification(Request $request, Notification $notification): Notification
    {
        $data = $request->get('data');
        $notification->setTitle($data[Notification::TITLE]);
        $notification->setContent($data[Notification::CONTENT]);

        return $notification;
    }
}
