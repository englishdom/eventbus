<?php

declare(strict_types=1);

namespace EventBus\Event;

use EventBus\DTO\DtoInterface;
use EventBus\Exception;
use EventBus\Exception\InvalidEventCollectionException;
use Laminas;
use Laminas\Hydrator;

abstract class BaseEvent implements EventInterface
{
    public const EVENT_NAME = null;

    protected string $requestId;
    protected \DateTime $creationTime;
    protected array $data = [];

    public function __construct()
    {
        $this->creationTime = new \DateTime();
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

    public function setRequestId(string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function getCreationTime(): \DateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(\DateTime $creationTime): self
    {
        $this->creationTime = $creationTime;
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
