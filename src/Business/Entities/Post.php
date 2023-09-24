<?php

namespace App\Business\Entities;

class Post
{


    public static function create(
        \App\Business\VO\Title $title,
        \App\Business\UseCases\Content $content,
        \App\Business\UseCases\FullName $author
    ): self
    {
    }
}