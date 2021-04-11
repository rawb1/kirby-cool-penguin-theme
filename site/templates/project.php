<?php snippet('head') ?>

<?php if ($page->text()->isEmpty() && !$page->link()->isEmpty()) go($page->link()) ?>
<main>
    <?php snippet('navbar') ?>
    <article id="project">
        <header>
            <h1 class="text-primary static">
                <?= $page->title() ?>
            </h1>
            <div class="header-links">
                <div class="text-light">
                    <?php snippet('date', ['date' => $page->date()]) ?>
                </div>
                <?php if (!$page->link()->isEmpty()) : ?>
                    <a class="project-link" rel="noopener" href="<?= $page->link()->toLinkObject() ?>">
                        link
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                <?php endif ?>
            </div>
        </header>
        <?= $page->text()->kt() ?>
    </article>
</main>

<?php snippet('footer') ?>