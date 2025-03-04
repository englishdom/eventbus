<?php
declare(strict_types=1);

namespace EventBus\DTO;

final class Card implements DtoInterface
{
    private $id;
    private $service;
    private $status;
    private $hiddenNumber;
    private $token;
    private $dtCreated;
    private $details;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): DtoInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setService(string $service): Card
    {
        $this->service = $service;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus($status): Card
    {
        $this->status = $status;
        return $this;
    }

    public function getHiddenNumber(): ?string
    {
        return $this->hiddenNumber;
    }

    public function setHiddenNumber(?string $hiddenNumber): Card
    {
        $this->hiddenNumber = $hiddenNumber;
        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): Card
    {
        $this->token = $token;
        return $this;
    }

    public function getDtCreated(): \DateTimeInterface
    {
        return $this->dtCreated;
    }

    public function setDtCreated(\DateTimeInterface $dtCreated): Card
    {
        $this->dtCreated = $dtCreated;
        return $this;
    }

    public function getDetails(): ?array
    {
        return $this->details;
    }

    public function setDetails(?array $details): Card
    {
        $this->details = $details;
        return $this;
    }
}
