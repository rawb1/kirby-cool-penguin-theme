<footer class="footer">
    <div>
        <p class="text-light">
            Copyright © 2020-<?= date("Y"); ?>
            <span class="author"><?= $site->meta_author() ?></span>
        </p>
    </div>
    <nav>
        <?php foreach (collection('pages') as $page) : ?>
            <span class="pipe">
                <a class="link text-light" href="<?= $page->url() ?>"><?= $page->title() ?></a>
            </span>
        <?php endforeach ?>
    </nav>
</footer>
</body>

</html>