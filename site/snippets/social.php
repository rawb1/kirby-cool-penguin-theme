<?php if (!$page->social_intro()->isEmpty()) : ?>
    <?= $page->social_intro() ?>
    <?php foreach ($page->social()->toStructure() as $social) : ?>
        <span class="text-list"><a class="link icon" target="_blank" rel="noopener" aria-label="<?= $social->name() ?>" href="<?= $social->link()->toLinkObject() ?>"><i class="<?= $social->icon() ?>"></i></a></span>
    <?php endforeach ?>
<?php endif ?>
</section>