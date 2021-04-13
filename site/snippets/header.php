<body>
    <?php image('/android-chrome-512x512.png') ?>
    <header class="header">
        <div class="header-top">
            <?php snippet('logo') ?>
            <h1 class="title"><a class="link static" href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
            <span class="text-light site-message"><?= $site->message() ?></span>
        </div>
        <?php snippet('navbar') ?>
    </header>