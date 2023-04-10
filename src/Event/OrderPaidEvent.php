<?php
declare(strict_types=1);

namespace EventBus\Event;

class OrderPaidEvent extends OrderCreatedEvent
{
    public const EVENT_NAME = 'order_paid';
}