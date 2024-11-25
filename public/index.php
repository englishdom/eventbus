<?php

declare(strict_types=1);

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

//$json = '{
//    "event_name":"user_registration",
//    "request_id":"34t34t23gdfg",
//    "creation_time":"2022-06-28 11:45:00",
//    "data":[{"id":2,"name":"Igor","email":"test@test.no"}]
//}';
//$event = (new \EventBus\Event\EventSerializer())->unserialize($json);
//var_dump($event, $event->getData()[0]->getEmail());
//die;

$dto = new \EventBus\DTO\Order();
$dto->setId(1);
$dto->setUserId(5843);
$dto->setAmount(10);
$dto->setCurrency('PLN');
$dto->setCountry('PL');
$dto->setDtCreated(new \DateTime('2022-06-28 11:45:00'));
$dto->setDtPayment(new \DateTime('2022-06-28 11:45:00'));
$dto->setDtPayment(null);
$dto->setPrice(50.25);
$dto->setGateway('payu');
$dto->setService('ed');
$dto->setStatus('paid');
$dto->setDescription(null);
$dto->setPackageType('manual');
$dto->setPromoCodes([
    (new \EventBus\DTO\PromoCode())->setId(1),
    (new \EventBus\DTO\PromoCode())->setId(2),
]);

$event = new \EventBus\Event\OrderPaidEvent();
$event->setRequestId('bnv2b3vt234gd');
$event->setData([$dto]);

$string = (new \EventBus\Event\EventSerializer())->serialize($event);
var_dump($string);

$event = (new \EventBus\Event\EventSerializer())->unserialize($string);
var_dump($event, $event->getData()[0]->getId());