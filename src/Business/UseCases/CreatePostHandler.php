<?php

namespace App\Business\UseCases;

use App\Business\Commands\SavePostCommand;
use App\Business\Entities\Post;
use App\Business\Responses\SavePostResponse;
use App\Business\VO\Content;
use App\Business\VO\FullName;
use App\Business\VO\StringVo;
use App\Business\VO\Title;

class CreatePostHandler
{

    public function __construct()
    {
    }

    public function handle(SavePostCommand $command): SavePostResponse
    {
        $response = new SavePostResponse();

        $post = Post::create(
            title: new Title($command->title),
            content: new Content($command->content),
            author: new FullName($command->author)
        );


        $response->isSaved = true;
        $response->postId = $post->id()->value();
        return $response;
    }
}