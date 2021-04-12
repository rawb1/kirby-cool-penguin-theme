<?php if ($page->hasImages()) : ?>
    <?= js('assets/js/medium-zoom/dist/medium-zoom.min.js') ?>
    <script>
        var background = function background() {
            return getComputedStyle(document.documentElement).getPropertyValue('--bg-color');
        };
        var zoom = mediumZoom('img', {
            background: background
        });
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(event) {
            return zoom.update({
                background: background
            });
        });
    </script>
<?php endif ?>