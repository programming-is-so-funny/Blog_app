<?php

namespace App\Business\VO;

class Content extends StringVo
{
    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        parent::__construct($content);
    }

}