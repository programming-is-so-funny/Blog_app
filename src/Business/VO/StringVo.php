<?php

namespace App\Business\VO;

use App\Business\Utils\Exceptions\NotEmptyException;

class StringVo
{
    protected string $value;

    /**
     * @throws NotEmptyException
     */
    public function __construct(string $value)
    {
        $this->validate($value);
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    /**
     * @throws NotEmptyException
     */
    private function validate(string $value): void
    {
        if (empty(trim($value))){
            throw new NotEmptyException("Cette valeur n'est pas valide !");
        }
    }

}