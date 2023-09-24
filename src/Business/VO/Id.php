<?php

namespace App\Business\VO;

use Ramsey\Uuid\Uuid;

class Id
{
    private string $id;
    public function __construct(?string $uuid = null)
    {
        $this->id = $uuid ?: Uuid::uuid7()->toString();
    }

    public function value(): string
    {
        return $this->id;
    }
}