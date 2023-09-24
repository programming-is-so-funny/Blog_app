<?php

namespace App\Business\VO;

class FullName extends StringVo
{

    /**
     * @param string $author
     */
    public function __construct(string $author)
    {
        parent::__construct($author);
    }
}