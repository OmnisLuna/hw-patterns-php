<?php

interface NotificationInterface
{
    public function send(User $user, string $message): bool;
}