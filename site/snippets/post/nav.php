<?php $collection = $collection->flip() ?>
<div class="post-nav">
    <?php if ($page->prev($collection)) : ?>
        <a class="link text-light" href="<?= $page->prev($collection)->url() ?>">
            <i class="fas fa-chevron-left"></i>
            prev
        </a>
    <?php endif ?>
    <?php if ($page->next($collection)) : ?>
        <a class="link text-light" href="<?= $page->next($collection)->url() ?>">
            next
            <i class="fas fa-chevron-right"></i>
        </a>
    <?php endif ?>
</div>