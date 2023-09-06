<?php

declare(strict_types=1);

namespace EventBus\Event;

use Laminas\Hydrator;

interface EventInterface
{
    public function getEventName(): string;
    public function getRequestId(): string;
    public function setRequestId(string $requestId): EventInterface;
    public function getCreationTime(): \DateTime;
    public function setCreationTime(\DateTime $time): EventInterface;
    public function getData(): array;
    public function setData(array $data): EventInterface;
    public function dtoStrategy(): Hydrator\Strategy\StrategyInterface;
}
