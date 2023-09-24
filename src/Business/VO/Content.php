<?php

namespace App\Business\VO;

use App\Business\Utils\Exceptions\NotEmptyException;

class Content extends StringVo
{
    /**
     * @param string $content
     * @throws NotEmptyException
     */
    public function __construct(string $content)
    {
        parent::__construct($content);
    }

}