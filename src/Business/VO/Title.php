<?php

namespace App\Business\VO;

use App\Business\Utils\Exceptions\NotEmptyException;

class Title extends StringVo
{

    /**
     * @param string $title
     * @throws NotEmptyException
     */
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

}