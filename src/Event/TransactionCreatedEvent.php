<?php
declare(strict_types=1);

namespace EventBus\Event;

use EventBus\DTO\Transaction;
use Laminas\Hydrator;

class TransactionCreatedEvent extends BaseEvent
{
    public const EVENT_NAME = 'transaction_created';

    public function dtoStrategy(): Hydrator\Strategy\StrategyInterface
    {
        $hydrator = new Hydrator\ClassMethodsHydrator();
        $hydrator->addStrategy(
            'dt_created',
            new Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        return new Hydrator\Strategy\CollectionStrategy(
            $hydrator,
            Transaction::class
        );
    }
}
