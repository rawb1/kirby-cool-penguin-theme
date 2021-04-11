 <?php if ($tags) : ?>
     <span>|</span>
     <i class="fas fa-tag"></i>
     <?php foreach ($tags as $tag) : ?>
         <span class="comma"><a class="link text-light" href="<?= $site->page('posts')->url(['params' => ['tag' => $tag]]) ?>">#<?= $tag ?></a></span>
     <?php endforeach ?>
 <?php endif ?>