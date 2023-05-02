<?php
declare(strict_types=1);

namespace EventBus\DTO;

final class Order implements DtoInterface
{
    private $id;
    private $promoCode;
    private $gateway;
    private $service;
    private $userId;
    private $price;
    private $amount;
    private $currency;
    private $country;
    private $description;
    private $dtCreated;
    private $dtPayment;
    private $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): DtoInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getPromoCode(): ?string
    {
        return $this->promoCode;
    }

    public function setPromoCode(?string $promoCode): Order
    {
        $this->promoCode = $promoCode;
        return $this;
    }

    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    public function setGateway(?string $gateway): Order
    {
        $this->gateway = $gateway;
        return $this;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setService(string $service): Order
    {
        $this->service = $service;
        return $this;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): Order
    {
        $this->userId = $userId;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): Order
    {
        $this->price = $price;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): Order
    {
        $this->amount = $amount;
        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): Order
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): Order
    {
        $this->country = $country;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Order
    {
        $this->description = $description;
        return $this;
    }

    public function getDtCreated(): \DateTimeInterface
    {
        return $this->dtCreated;
    }

    public function setDtCreated(\DateTimeInterface $dtCreated): Order
    {
        $this->dtCreated = $dtCreated;
        return $this;
    }

    public function getDtPayment(): ?\DateTimeInterface
    {
        return $this->dtPayment;
    }

    public function setDtPayment(?\DateTimeInterface $dtPayment): Order
    {
        $this->dtPayment = $dtPayment;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): Order
    {
        $this->status = $status;
        return $this;
    }
}
