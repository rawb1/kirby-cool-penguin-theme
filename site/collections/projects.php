<?php

return function ($site) {
    return $site->page('projects')->children()->listed()->sortBy('date', 'desc');
};
