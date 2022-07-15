<?php

declare(strict_types=1);

namespace EventBus\DTO;

interface DtoInterface
{
    public function getId(): int;
    public function setId(int $id): self;
}