<?php

declare(strict_types=1);

namespace EventBus\DTO;

interface UserInterface extends DtoInterface
{
    public function getName(): ?string;
    public function setName(?string $name): self;
    public function getEmail(): string;
    public function setEmail(string $email): self;
}