<nav class="navbar">
    <?php foreach (collection('pages') as $page) : ?>
        <a class="link text-primary backslash" href="<?= $page->url() ?>"><i class="fas fa-dollar-sign"></i>&nbsp;<?= $page->title() ?></a>
    <?php endforeach ?>
</nav>