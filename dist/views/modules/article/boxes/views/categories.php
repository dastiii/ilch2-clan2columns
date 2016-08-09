<?php
$articleMapper = $this->get('articleMapper');
$cats = $this->get('cats');
?>

<?php if ($cats != ''): ?>
    <ul class="list-group">
        <?php foreach ($cats as $cat): ?>
            <li class="list-group-item">
                <a href="<?=$this->getUrl(['module' => 'article', 'controller' => 'cats', 'action' => 'show', 'id' => $cat->getId()]) ?>">
                    <?=$cat->getName() ?>
                </a>
                <span class="badge pull-right"><?=count($articleMapper->getArticlesByCats($cat->getId())) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div class="panel-body">
        <?=$this->getTrans('noCats') ?>
    </div>
<?php endif; ?>
