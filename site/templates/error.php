<?php snippet('head') ?>
<?php snippet('header') ?>

<main>
    <section id="error">
        <header class="error-header">
            <h2>
                <i class="text-light fas fa-exclamation-triangle"></i>
                <?= $page->title() ?>
            </h2>
            <a class="nav" href="<?= $site->url() ?>">
                <i class="fas fa-chevron-left"></i>
                back to safety
            </a>
        </header>
        <?= $page->text()->kt() ?>
    </section>
</main>

<?php snippet('footer') ?>