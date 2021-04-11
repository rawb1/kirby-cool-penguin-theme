<?php snippet('head') ?>

<main>
    <?php snippet('navbar') ?>
    <article id="post">
        <header>
            <h1 class="text-primary static">
                <?= $page->title() ?>
            </h1>
            <div class="header-links">
                <div class="text-light">
                    <span class="author"><?= $author ?></span>
                    <?php snippet('date', ['date' => $page->date()]) ?>
                    <?php snippet('post/tags') ?>
                </div>
                <?php snippet('post/nav', ['collection' => collection('posts')->flip()]) ?>
            </div>
        </header>
        <?= $page->text()->kt() ?>
    </article>
    <?php if ($page->text()->words() > 100) : ?>
        <section id="nav">
            <?php snippet('post/nav', ['collection' => collection('posts')->flip()]) ?>
        </section>
    <?php endif ?>
</main>

<?php snippet('footer') ?>