<?php

namespace App\Business\VO;

class DateVo extends StringVo
{

    public function __construct(?string $date = null)
    {
        if ($date){
            parent::__construct($date);
        }else{
            $this->value = date('Y-m-d H:i:s');
        }
    }
}