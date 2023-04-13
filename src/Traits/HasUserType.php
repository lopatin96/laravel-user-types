<?php

namespace Atin\LaravelUserTypes\Traits;

use Atin\LaravelUserTypes\Enums\UserType;

trait HasUserType
{
    public function isPrivileged(): bool
    {
        return $this->isModerator() || $this->isAdmin();
    }

    public function isClient(): bool
    {
        return $this->type === UserType::Client;
    }

    public function isModerator(): bool
    {
        return $this->type === UserType::Moderator;
    }

    public function isAdmin(): bool
    {
        return $this->type === UserType::Admin;
    }
}