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

    /**
     * @return self
     */
    public static function nextIdentifier(): self
    {
        $static = new self();
        $static->id = Uuid::uuid7()->toString();
        return $static;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->id;
    }
}