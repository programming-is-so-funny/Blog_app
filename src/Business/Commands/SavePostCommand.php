<?php

namespace App\Business\Commands;

readonly class SavePostCommand
{

    /**
     * @param string $title
     * @param string $content
     * @param string $author
     */
    public function __construct(
        public string $title,
        public string $content,
        public string $author
    )
    {
    }

}