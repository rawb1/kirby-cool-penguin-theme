<?php snippet('head') ?>
<?php snippet('header') ?>

<main>
    <section id="projects">
        <?php snippet('project/list', ['projects' => collection('projects')]) ?>
    </section>
</main>

<?php snippet('footer') ?>