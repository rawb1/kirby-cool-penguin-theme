<?php if ($pagination->hasPages()) : ?>
    <nav class="pagination">
        <?php if ($pagination->hasPrevPage()) : ?>
            <a class="link" href="<?= $pagination->prevPageURL() ?>">
                <i class="fas fa-chevron-left"></i>
                <!-- prev -->
            </a>
        <?php endif ?>

        <?php foreach ($pagination->range(4) as $r) : ?>
            <?php if ($pagination->page() === $r) : ?>
                <span class="bg-primary" aria-current="page"><?= $r ?></span>
            <?php else : ?>
                <a class="link" href="<?= $pagination->pageURL($r) ?>"><?= $r ?></a>
            <?php endif ?>
        <?php endforeach ?>

        <?php if ($pagination->hasNextPage()) : ?>
            <a class="link" href="<?= $pagination->nextPageURL() ?>">
                <!-- next -->
                <i class="fas fa-chevron-right"></i>
            </a>
        <?php endif ?>
    </nav>
<?php endif ?>