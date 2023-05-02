<?php

declare(strict_types=1);

namespace EventBus\Event;

use EventBus\Exception;
use Laminas;

abstract class BaseEvent implements EventInterface
{
    public const EVENT_NAME = null;

    protected $requestId;
    protected $creationTime;
    protected $data = [];

    public function __construct(string $requestId)
    {
        $this->creationTime = new \DateTimeImmutable();
        $this->requestId = $requestId;
    }

    public function getEventName(): string
    {
        if (empty(static::EVENT_NAME)) {
            throw new Exception\IncorrectEventNameException('Need announce constant in class:' . static::class);
        }
        return static::EVENT_NAME;
    }

    public function getRequestId(): string
    {
        return $this->requestId;
    }

    public function setRequestId(string $requestId): EventInterface
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function getCreationTime(): \DateTimeImmutable
    {
        return $this->creationTime;
    }

    public function setCreationTime(\DateTimeImmutable $time): EventInterface
    {
        $this->creationTime = $time;
        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): EventInterface
    {
        $this->data = $data;
        return $this;
    }
}
