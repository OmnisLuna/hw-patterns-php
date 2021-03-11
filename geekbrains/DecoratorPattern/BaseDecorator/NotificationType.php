<?php
class NotificationType implements NotificationInterface
{
    /**
     * @var NotificationInterface
     */
    protected $notificationInterface;

    public function __construct(NotificationInterface $notificationInterface)
    {
        $this->notificationInterface = $notificationInterface;
    }

    /**
     * Декоратор делегирует всю работу обёрнутому компоненту.
     * @param User $user
     * @param string $message
     * @return bool
     */
    public function send(User $user, string $message): bool
    {
        return $this->notificationInterface->send($user, $message);
    }
}