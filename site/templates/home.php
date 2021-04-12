<?php snippet('head') ?>
<?php snippet('header') ?>

<main>
    <section id="about">
        <?= $page->text()->kt() ?>
        <?php snippet('social') ?>
        <section id="posts">
            <h2><a class="link" href="<?= $site->page('posts')->url() ?>"><?= $site->page('posts')->title() ?></a></h2>
            <?php snippet('post/list', ['posts' => collection('posts')->limit(5)]) ?>
        </section>
        <section id="projects">
            <h2><a class="link" href="<?= $site->page('projects')->url() ?>"><?= $site->page('projects')->title() ?></a></h2>
            <?php snippet('project/list', ['projects' => collection('projects')->limit(5)]) ?>
        </section>
</main>

<?php snippet('footer') ?>