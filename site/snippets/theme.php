<style>
    @import "/assets/css/highlight/<?= $site->light_highlight() ?>.css"screen;
    @import "/assets/css/highlight/<?= $site->dark_highlight() ?>.css"screen and (prefers-color-scheme: dark);

    :root {
        --bg-color: <?= $site->light_background_color() ?>;
        --primary-color: <?= $site->light_primary_color() ?>;
        --text-color: <?= $site->light_text_color() ?>;
        --text-color-light: <?= $site->light_text_light_color() ?>;
    }

    @media (prefers-color-scheme: dark) {
        :root {
            --bg-color: <?= $site->dark_background_color() ?>;
            --primary-color: <?= $site->dark_primary_color() ?>;
            --text-color: <?= $site->dark_text_color() ?>;
            --text-color-light: <?= $site->dark_text_light_color() ?>;
        }
    }
</style>