<?php $articles = $this->get('articles'); ?>

<?php if (!empty($articles)): ?>
    <ul class="list-group">
        <?php foreach ($articles as $article): ?>
            <li class="list-group-item">
                <a href="<?=$this->getUrl(['module' => 'article', 'controller' => 'index', 'action' => 'show', 'id' => $article->getId()]) ?>">
                    <?=$article->getTitle() ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div class="panel-body">
        <?=$this->getTrans('noArticles') ?>
    </div>
<?php endif; ?>
