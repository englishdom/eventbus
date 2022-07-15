<?php

declare(strict_types=1);

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$json = '{
    "event_name":"user_registration",
    "request_id":"34t34t23gdfg",
    "creation_time":"2022-06-28 11:45:00",
    "data":[{"id":2,"name":"Igor","email":"test@test.no"}]
}';
$event = (new \EventBus\Event\EventSerializer())->unserialize($json);
var_dump($event, $event->getData()[0]->getEmail());

$string = (new \EventBus\Event\EventSerializer())->serialize($event);
var_dump($string);