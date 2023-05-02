<?php

declare(strict_types=1);

namespace EventBus\Event;

use EventBus\DTO\User;
use Laminas;

final class UserRegistrationEvent extends BaseEvent
{
    public const EVENT_NAME = 'user_registration';

    public function dtoStrategy(): Laminas\Hydrator\Strategy\StrategyInterface
    {
        return new Laminas\Hydrator\Strategy\CollectionStrategy(
            new Laminas\Hydrator\ClassMethodsHydrator(),
            User::class
        );
    }
}
