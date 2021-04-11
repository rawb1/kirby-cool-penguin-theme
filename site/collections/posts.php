<?php

return function ($site) {
    return $site->page('posts')->children()->listed()->sortBy('date', 'desc');
};
