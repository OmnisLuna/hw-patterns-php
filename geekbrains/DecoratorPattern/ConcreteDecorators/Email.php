<?php

class Email extends NotificationType
{
    public function send(User $user, string $message): bool
    {
        echo "Отправить $message на адрес $user->email";
    }
}