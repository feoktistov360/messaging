<?php

namespace App\NotificationSender\Business\Mapper;

use App\NotificationSender\Shared\Transfer\Notification;
use Symfony\Component\HttpFoundation\Request;

interface RequestToNotificationMapperInterface
{
    public function mapRequestToNotification(Request $request, Notification $notification): Notification;
}
