<?php
$articleMapper = $this->get('articleMapper');
$archive = $this->get('archive');
?>

<?php if (!empty($archive)): ?>
    <ul class="list-group">
        <?php foreach ($archive as $archiv): ?>
            <?php $date = new \Ilch\Date($archiv->getDateCreated()); ?>
            <li class="list-group-item">
                <a href="<?=$this->getUrl(['module' => 'article', 'controller' => 'archive', 'action' => 'show', 'year' => $date->format("Y", true), 'month' => $date->format("m", true)]) ?>">
                    <?=$date->format("F Y", true) ?>
                </a>
                <span class="badge pull-right"><?=$articleMapper->getCountArticlesByMonthYear($archiv->getDateCreated()) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div class="panel-body">
        <?=$this->getTrans('noArticles') ?>
    </div>
<?php endif; ?>
