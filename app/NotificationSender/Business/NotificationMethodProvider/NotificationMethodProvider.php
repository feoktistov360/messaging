<?php

namespace App\NotificationSender\Business\NotificationMethodProvider;

abstract class NotificationMethodProvider
{
    abstract public function send();

    abstract public function getName();
}
