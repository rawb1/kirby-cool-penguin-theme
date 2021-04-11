<?php snippet('head') ?>
<?php snippet('header') ?>

<main>
    <section id="posts">
        <!-- TODO: add tag selection -->
        <!-- TODO: add search -->
        <?php if ($tag) : ?>
            <div class="text-light">
                <i class="fas fa-tag"></i>
                <span>#<?= $tag ?></span>
            </div>
        <?php endif ?>
        <?php foreach ($posts->group(function ($p) {
            return $p->date()->toDate('Y');
        }) as $year => $yearPosts) : ?>
            <h2><?= $year ?></h2>
            <?php snippet('post/list', ['posts' => $yearPosts]) ?>
        <?php endforeach ?>
    </section>
    <section>
        <?php snippet('pagination', ['pagination' => $posts->pagination()]) ?>
    </section>
</main>

<?php snippet('footer') ?>