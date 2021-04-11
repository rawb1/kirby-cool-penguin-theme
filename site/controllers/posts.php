<?php

return function ($page) {
    $tag = param('tag');
    return [
        'tag' => $tag,
        'posts' => collection('posts')->when($tag, function ($tag) {
            return $this->filterBy('tags', $tag, ',');
        })->paginate($page->pagination()->toInt(10))
    ];
};
