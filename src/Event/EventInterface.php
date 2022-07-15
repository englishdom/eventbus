<?php

declare(strict_types=1);

namespace EventBus\Event;

use Laminas;

interface EventInterface
{
    public function getEventName(): string;
    public function getRequestId(): string;
    public function setRequestId(string $requestId): self;
    public function getCreationTime(): \DateTime;
    public function setCreationTime(\DateTime $time): self;
    public function getData(): array;
    public function setData(array $data): self;
    public function dtoStrategy(): Laminas\Hydrator\Strategy\StrategyInterface;
}
