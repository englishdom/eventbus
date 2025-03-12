<?php
declare(strict_types=1);

namespace EventBus\Event;

use EventBus\DTO\PromoCode;
use Laminas\Hydrator;

class PromoCodeCreatedEvent extends BaseEvent
{
    public const EVENT_NAME = 'promo_code_created';

    public function dtoStrategy(): Hydrator\Strategy\StrategyInterface
    {
        $hydrator = new Hydrator\ClassMethodsHydrator();
        $hydrator->addStrategy(
            'dt_created',
            new Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        $hydrator->addStrategy(
            'start_date',
            new Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        $hydrator->addStrategy(
            'finish_date',
            new Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        return new Hydrator\Strategy\CollectionStrategy(
            $hydrator,
            PromoCode::class
        );
    }
}
