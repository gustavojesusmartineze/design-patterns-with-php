<?php

interface NotificationInterface
{
    public function send($message);
}

class EmailNotification implements NotificationInterface
{
    public function send($message)
    {
        echo "Sending email notification: " . $message . PHP_EOL;
    }
}

class SMSNotification implements NotificationInterface
{
    public function send($message)
    {
        echo "Sending SMS notification: " . $message . PHP_EOL;
    }
}

class PushNotification implements NotificationInterface
{
    public function send($message)
    {
        echo "Sending push notification: " . $message . PHP_EOL;
    }
}

class NotificationService
{
    public $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function notify($message)
    {
        $this->notification->send($message);
    }
}


$emailNotification = new EmailNotification();
$smsNotification = new SMSNotification();
$pushNotification = new PushNotification();
$notificationService = new NotificationService($emailNotification);
// $notificationService = new NotificationService($smsNotification);
// $notificationService = new NotificationService($pushNotification);
$notificationService->notify('Hello, this is an email notification');