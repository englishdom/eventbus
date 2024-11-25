<?php
declare(strict_types=1);

namespace EventBus\DTO;

final class Order implements DtoInterface
{
    private $id;
    private $externalOrderId;
    /* @deprecated promoCode variable after update payment service */
    /* @see promoCodes variable */
    private $promoCode;
    private $promoCodes;
    private $gateway;
    private $service;
    private $userId;
    private $price;
    private $amount;
    private $bonusAmount;
    private $currency;
    private $country;
    private $description;
    private $dtCreated;
    private $dtPayment;
    private $dtExpire;
    private $status;
    private $packageType;
    private $generatedType;
    private $installments;
    private $giftCertificate;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): DtoInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getExternalOrderId(): ?string
    {
        return $this->externalOrderId;
    }

    public function setExternalOrderId($externalOrderId): Order
    {
        $this->externalOrderId = $externalOrderId;
        return $this;
    }

    /**
     * @deprecated Need remove after update payment service
     */
    public function getPromoCode(): ?string
    {
        return $this->promoCode;
    }

    /**
     * @deprecated Need remove after update payment service
     */
    public function setPromoCode(?string $promoCode): Order
    {
        $this->promoCode = $promoCode;
        return $this;
    }

    public function getPromoCodes(): ?array
    {
        return $this->promoCodes;
    }

    public function setPromoCodes(?array $promoCodes): Order
    {
        $this->promoCodes = $promoCodes;
        return $this;
    }

    public function getGeneratedType(): ?string
    {
        return $this->generatedType;
    }

    public function setGeneratedType(?string $generatedType): Order
    {
        $this->generatedType = $generatedType;
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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): Order
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

    public function getBonusAmount(): ?float
    {
        return $this->bonusAmount;
    }

    public function setBonusAmount(?float $bonusAmount): Order
    {
        $this->bonusAmount = $bonusAmount;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): Order
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): Order
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

    public function getDtExpire(): ?\DateTimeInterface
    {
        return $this->dtExpire;
    }

    public function setDtExpire(?\DateTimeInterface $dtExpire): Order
    {
        $this->dtExpire = $dtExpire;
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

    public function getPackageType(): ?string
    {
        return $this->packageType;
    }

    public function setPackageType(?string $packageType): Order
    {
        $this->packageType = $packageType;
        return $this;
    }

    public function getInstallments(): ?string
    {
        return $this->installments;
    }

    public function setInstallments(?string $installments): Order
    {
        $this->installments = $installments;
        return $this;
    }

    public function getGiftCertificate(): ?string
    {
        return $this->giftCertificate;
    }

    public function setGiftCertificate(?string $giftCertificate): Order
    {
        $this->giftCertificate = $giftCertificate;
        return $this;
    }
}
