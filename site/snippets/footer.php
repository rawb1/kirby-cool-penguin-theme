<footer class="footer">
    <div>
        <p class="text-light">
            Copyright ©
            <?php $start_year = $site->copyright_start_year() ?>
            <?php if (!$start_year->isEmpty()) echo $start_year . '-' ?><?= date("Y") ?>
            <span class="author"><?= $site->meta_author() ?></span>
        </p>
    </div>
    <nav>
        <?php foreach (collection('pages') as $p) : ?>
            <span class="pipe">
                <a class="link text-light" href="<?= $p->url() ?>"><?= $p->title() ?></a>
            </span>
        <?php endforeach ?>
    </nav>
</footer>
<?php snippet('zoom') ?>
</body>

</html>