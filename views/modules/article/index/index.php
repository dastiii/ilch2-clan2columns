<?php
$articles = $this->get('articles');
$categoryMapper = $this->get('categoryMapper');
$commentMapper = $this->get('commentMapper');
$userMapper = $this->get('userMapper');
?>

<div id="modules-articles">
    <?php if ($articles != ''):
        foreach ($articles as $article):
            $date = new \Ilch\Date($article->getDateCreated());
            $commentsCount = $commentMapper->getCountComments('article/index/show/id/'.$article->getId());
            $image = $article->getImage();
            $imageSource = $article->getImageSource();

            $catIds = explode(",", $article->getCatId());
            $categories = '';
            foreach ($catIds as $catId) {
                $articlesCats = $categoryMapper->getCategoryById($catId);
                $categories .= '<a href="'.$this->getUrl(['controller' => 'cats', 'action' => 'show', 'id' => $catId]).'">'.$articlesCats->getName().'</a>, ';
            }
        ?>
            <?php if ($article->getTeaser()): ?>
                <h3 class="teaser"><?=$this->escape($article->getTeaser()) ?></h3>
            <?php endif; ?>
            <h2 class="title"><a href="<?=$this->getUrl(['action' => 'show', 'id' => $article->getId()]) ?>"><?=$this->escape($article->getTitle()) ?></a></h2>
            <?php if (!empty($image)): ?>
                <figure>
                    <img class="article_image" src="<?=$this->getBaseUrl($image) ?>">
                    <?php if (!empty($imageSource)): ?>
                        <figcaption class="article_image_source"><?=$this->getTrans('imageSource') ?>: <?=$this->escape($imageSource) ?></figcaption>
                    <?php endif; ?>
                </figure>
            <?php endif; ?>

            <?php $content = $article->getContent(); ?>

            <?php if (strpos($content, '[PREVIEWSTOP]') !== false): ?>
                <?php $contentParts = explode('[PREVIEWSTOP]', $content); ?>
                <?=reset($contentParts) ?>
                <a class="btn btn-primary btn-sm" href="<?=$this->getUrl(['action' => 'show', 'id' => $article->getId()]) ?>">
                    <i class="fa fa-file-text-o"></i> <?=$this->getTrans('readMore') ?>
                </a>
            <?php else: ?>
                <?=$content ?>
            <?php endif; ?>
            <hr />
            <div>
                <?php if ($article->getAuthorId() != ''): ?>
                    <?php $user = $userMapper->getUserById($article->getAuthorId()); ?>
                    <?php if ($user != ''): ?>
                        <i class="fa fa-user" title="<?=$this->getTrans('author') ?>"></i> <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'profil', 'action' => 'index', 'user' => $user->getId()]) ?>"><?=$this->escape($user->getName()) ?></a>&nbsp;&nbsp;
                    <?php endif; ?>
                <?php endif; ?>
                <i class="fa fa-calendar" title="<?=$this->getTrans('date') ?>"></i> <a href="<?=$this->getUrl(['controller' => 'archive', 'action' => 'show', 'year' => $date->format("Y", true), 'month' => $date->format("m", true)]) ?>"><?=$date->format('d.', true) ?> <?=$this->getTrans($date->format('F', true)) ?> <?=$date->format('Y', true) ?></a>
                &nbsp;&nbsp;<i class="fa fa-clock-o" title="<?=$this->getTrans('time') ?>"></i> <?=$date->format('H:i', true) ?>
                &nbsp;&nbsp;<i class="fa fa-folder-open-o" title="<?=$this->getTrans('cats') ?>"></i> <?=rtrim($categories, ', '); ?>
                &nbsp;&nbsp;<i class="fa fa-comment-o" title="<?=$this->getTrans('comments') ?>"></i> <a href="<?=$this->getUrl(['action' => 'show', 'id' => $article->getId().'#comment']) ?>"><?=$commentsCount ?></a>
                &nbsp;&nbsp;<i class="fa fa-eye" title="<?=$this->getTrans('hits') ?>"></i> <?=$article->getVisits() ?>
                <?php if ($article->getKeywords() != ''): ?>
                    <br /><i class="fa fa-hashtag"></i> <?=$article->getKeywords() ?>
                <?php endif; ?>
            </div>
            <br /><br /><br />
        <?php endforeach; ?>
        <div class="pull-right">
            <?=$this->get('pagination')->getHtml($this, ['action' => 'index']) ?>
        </div>
    <?php else: ?>
        <?=$this->getTrans('noArticles') ?>
    <?php endif; ?>
</div>
