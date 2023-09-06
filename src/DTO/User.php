<?php

declare(strict_types=1);

namespace EventBus\DTO;

final class User implements UserInterface
{
    private $id;
    private $name;
    private $email;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): DtoInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): UserInterface
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): UserInterface
    {
        $this->email = $email;
        return $this;
    }
}
