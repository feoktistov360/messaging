<?php

namespace App\Http\Controllers;

use App\NotificationSender\Business\Mapper\RequestToNotificationMapperInterface;
use App\NotificationSender\NotificationFacadeInterface;
use App\NotificationSender\Shared\Transfer\Notification;
use Symfony\Component\HttpFoundation\Request;

class NotificationController extends Controller
{
    public NotificationFacadeInterface $notificationFacade;

    public RequestToNotificationMapperInterface $notificationMapper;

    public function __construct(
        NotificationFacadeInterface $notificationFacade,
        RequestToNotificationMapperInterface $notificationMapper
    ) {
        $this->notificationFacade = $notificationFacade;
        $this->notificationMapper = $notificationMapper;
    }

    public function send(Request $request)
    {
        $notification = $this->notificationMapper->mapRequestToNotification($request, new Notification());

        $this->notificationFacade->send($notification);
    }
}
