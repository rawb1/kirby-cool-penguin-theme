<?php snippet('head') ?>
<?php snippet('header') ?>

<main>
    <article id="about">
        <?= kirbytext($page->text()) ?>
    </article>
</main>

<?php snippet('footer') ?>