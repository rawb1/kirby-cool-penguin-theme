<?php
$defaultLogo = asset('assets/img/logo.svg');
$svgLogo = asset('logo.svg');
$pngLogo = asset('logo.png');

if ($svgLogo->exists()) {
    $logo = $svgLogo;
} elseif ($pngLogo->exists()) {
    $logo = $pngLogo;
} else {
    $logo = $defaultLogo;
}
?>

<a class="link logo" aria-label="home" href="<?= $site->url() ?>" style="background-image: url(<?= $logo->url() ?>);"></a>