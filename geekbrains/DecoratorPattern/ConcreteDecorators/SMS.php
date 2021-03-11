<?php

class SMS extends NotificationType
{
    public function send(User $user, string $message): bool
    {
        echo "Отправить $message на номер $user->phone";
    }
}