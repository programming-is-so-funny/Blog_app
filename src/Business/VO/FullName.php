<?php

namespace App\Business\VO;

use App\Business\Utils\Exceptions\NotEmptyException;

class FullName extends StringVo
{

    /**
     * @param string $author
     * @throws NotEmptyException
     */
    public function __construct(string $author)
    {
        parent::__construct($author);
    }
}