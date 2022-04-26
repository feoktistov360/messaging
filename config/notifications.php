<?php

use App\NotificationSender\Shared\NotificationConstants;

return [
    NotificationConstants::METHOD => env(NotificationConstants::METHOD, 'airship'),
];
