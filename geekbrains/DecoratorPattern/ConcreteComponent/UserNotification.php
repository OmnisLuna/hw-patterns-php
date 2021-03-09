<?php

/*
 * Предположим, что у нас есть приложение, способное отправлять оповещения тремя способами: SMS, Email и Chrome Notification (CN).
 * Пользователю предлагается выбрать, какие уведомления будут приходить. На каждый из вариантов необходим свой подкласс.
 * Например: SMS + Email, Email + CN, SMS + Email + CN. Как поступить?
 */

class UserNotification implements NotificationInterface
{
    public function send(User $user, string $message): bool
    {
        if ($user->cNNotifyStatus) {
            $notificationType = new NotificationType(new ChromeNotification($this));
            $notificationType->send($user, $message);
        } else if ($user->smsNotifyStatus){
            $notificationType = new NotificationType(new SMS($this));
            $notificationType->send($user, $message);
        } else {
            $notificationType = new NotificationType(new Email($this));
            $notificationType->send($user, $message);
        }
    }
}