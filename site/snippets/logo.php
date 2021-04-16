<a class="link logo" aria-label="home" href="<?= $site->url() ?>">
    <?= svg('logo.svg') ?: (asset('logo.png')->exists() ? asset('logo.png')->html() : svg('assets/img/logo.svg')) ?>
</a>