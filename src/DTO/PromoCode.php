<?php
declare(strict_types=1);

namespace EventBus\DTO;

final class PromoCode implements DtoInterface
{
    private $id;
    private $code;
    private $userId;
    private $amount;
    private $type;
    private $service;
    private $description;
    private $status;
    private $generatedType;
    private $details;
    private $paymentType;
    private $activations;
    private $creatorId;
    private $dtCreated;
    private $startDate;
    private $finishDate;
    private $packagesType;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): DtoInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): PromoCode
    {
        $this->code = $code;
        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId($userId): PromoCode
    {
        if (is_numeric($userId)) {
            $this->userId = (int)$userId;
        }
        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): PromoCode
    {
        $this->amount = $amount;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): PromoCode
    {
        $this->type = $type;
        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): PromoCode
    {
        $this->service = $service;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): PromoCode
    {
        $this->description = $description;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): PromoCode
    {
        $this->status = $status;
        return $this;
    }

    public function getGeneratedType(): ?string
    {
        return $this->generatedType;
    }

    public function setGeneratedType(string $generatedType): PromoCode
    {
        $this->generatedType = $generatedType;
        return $this;
    }

    public function getDetails(): ?array
    {
        return $this->details;
    }

    public function setDetails(?array $details): PromoCode
    {
        $this->details = $details;
        return $this;
    }

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    public function setPaymentType(string $paymentType): PromoCode
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    public function getDtCreated(): \DateTimeInterface
    {
        return $this->dtCreated;
    }

    public function setDtCreated(\DateTimeInterface $dtCreated): PromoCode
    {
        $this->dtCreated = $dtCreated;
        return $this;
    }

    public function getActivations(): ?int
    {
        return $this->activations;
    }

    public function setActivations(?int $activations): PromoCode
    {
        $this->activations = $activations;
        return $this;
    }

    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }

    public function setCreatorId(?int $creatorId): PromoCode
    {
        $this->creatorId = $creatorId;
        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): PromoCode
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getFinishDate(): ?\DateTimeInterface
    {
        return $this->finishDate;
    }

    public function setFinishDate(?\DateTimeInterface $finishDate): PromoCode
    {
        $this->finishDate = $finishDate;
        return $this;
    }

    public function getPackagesType(): ?array
    {
        return $this->packagesType;
    }

    public function setPackagesType(?array $packagesType): PromoCode
    {
        $this->packagesType = $packagesType;
        return $this;
    }
}
