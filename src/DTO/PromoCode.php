<?php
declare(strict_types=1);

namespace EventBus\DTO;


final class PromoCode implements DtoInterface
{
    private $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): DtoInterface
    {
        $this->id = $id;
        return $this;
    }
}
