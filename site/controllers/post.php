<?php

return function ($page) {
    $author = $page->author()->toUser();
    return [
        'author' => $author ? $author->name() : '',
        'tags' => $page->tags()->split()
    ];
};
