<?php

class ChromeNotification extends NotificationType
{
    public function send(User $user, string $message): bool
    {
        echo "Отправить оповещение пользователю с кукой $user->cookie в хром с сообщением $message";
    }
}