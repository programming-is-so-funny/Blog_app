<?php

namespace App\Business\VO;

class Title extends StringVo
{

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

}