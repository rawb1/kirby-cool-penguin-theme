<body>
    <header class="header">
        <div class="header-top">
            <a class="link logo" aria-label="home" href="<?= $site->url() ?>"></a>
            <h1 class="title"><a class="link static" href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
            <span class="text-light site-message"><?= $site->message() ?></span>
        </div>
        <?php snippet('navbar') ?>
    </header>