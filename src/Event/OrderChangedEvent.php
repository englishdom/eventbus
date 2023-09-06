<?php
declare(strict_types=1);

namespace EventBus\Event;

class OrderChangedEvent extends OrderCreatedEvent
{
    public const EVENT_NAME = 'order_changed';
}