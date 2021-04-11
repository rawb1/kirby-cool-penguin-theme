 <ul class="list projects-list">
     <?php foreach ($projects as $project) : ?>
         <li>
             <a class="link text-primary" href="<?= $project->url() ?>"><?= $project->title() ?></a><span>:</span>
             <?= $project->description() ?>
         </li>
     <?php endforeach ?>
 </ul>