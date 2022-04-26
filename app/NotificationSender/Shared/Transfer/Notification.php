<?php

namespace App\NotificationSender\Shared\Transfer;

class Notification
{
    public const TITLE = 'title';

    public const CONTENT = 'content';

    public string $title;

    public string $content;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }
}
