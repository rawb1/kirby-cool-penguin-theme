<?php snippet('head') ?>
<?php $link = $page->link()->toLinkObject() ?>
<?php if ($page->text()->isEmpty() && $link) go($link) ?>
<main>
    <?php snippet('navbar') ?>
    <article id="project">
        <header>
            <h1 class="static">
                <?= $page->title() ?>
            </h1>
            <div class="header-links">
                <div class="text-light">
                    <?php snippet('date', ['date' => $page->date()]) ?>
                </div>
                <?php if ($link) : ?>
                    <a class="project-link" rel="noopener" href="<?= $link ?>">
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