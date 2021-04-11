 <ul class="list posts-list">
     <?php foreach ($posts as $post) : ?>
         <li>
             <?php snippet('date', ['date' => $post->date()]) ?>
             <i class="fas fa-chevron-right text-primary"></i>
             <a class="link" href="<?= $post->url() ?>"><?= $post->title() ?></a>
         </li>
     <?php endforeach ?>
 </ul>