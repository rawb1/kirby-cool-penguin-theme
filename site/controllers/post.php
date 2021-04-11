<?php

return function ($page) {
    return [
        'author' => $page->author()->toUser()->name(),
        'tags' => $page->tags()->split()
    ];
};
