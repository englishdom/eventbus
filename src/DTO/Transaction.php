<?php
declare(strict_types=1);

namespace EventBus\DTO;

final class Transaction implements DtoInterface
{
    private $id;
    private $service;
    private $packageType;
    private $transactionType;
    private $price;
    private $amount;
    private $currency;
    private $userId;
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

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     * @return Transaction
     */
    public function setService($service): Transaction
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * @param mixed $packageType
     * @return Transaction
     */
    public function setPackageType($packageType): Transaction
    {
        $this->packageType = $packageType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * @param mixed $transactionType
     * @return Transaction
     */
    public function setTransactionType($transactionType): Transaction
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): Transaction
    {
        $this->price = $price;
        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): Transaction
    {
        $this->amount = $amount;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): Transaction
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     * @return Transaction
     */
    public function setUserId($userId): Transaction
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtCreated()
    {
        return $this->dtCreated;
    }

    /**
     * @param mixed $dtCreated
     * @return Transaction
     */
    public function setDtCreated($dtCreated): Transaction
    {
        $this->dtCreated = $dtCreated;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     * @return Transaction
     */
    public function setDetails(array $details): Transaction
    {
        $this->details = $details;
        return $this;
    }
}
