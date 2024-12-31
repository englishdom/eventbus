<?php
declare(strict_types=1);

namespace EventBus\Event;

use EventBus\DTO\Order;
use EventBus\DTO\PromoCode;
use Laminas\Hydrator;

class OrderCreatedEvent extends BaseEvent
{
    public const EVENT_NAME = 'order_created';

    public function dtoStrategy(): Hydrator\Strategy\StrategyInterface
    {
        $hydrator = new Hydrator\ClassMethodsHydrator();
        $hydrator->addStrategy(
            'dt_created',
            new Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        $hydrator->addStrategy(
            'dt_payment',
            new Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        $hydrator->addStrategy(
            'dt_expire',
            new Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        $hydrator->addStrategy(
            'promo_codes',
            new Hydrator\Strategy\NullableStrategy(
                new Hydrator\Strategy\CollectionStrategy(
                    new Hydrator\ClassMethodsHydrator(),
                    PromoCode::class
                )
            )
        );
        return new Hydrator\Strategy\CollectionStrategy(
            $hydrator,
            Order::class
        );
    }
}
