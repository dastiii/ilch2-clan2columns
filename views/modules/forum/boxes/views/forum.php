<?php
$forumMapper = $this->get('forumMapper');
$topicMapper = $this->get('topicMapper');
$groupIdsArray = $this->get('groupIdsArray');
$adminAccess = null;
if ($this->getUser()) {
    $adminAccess = $this->getUser()->isAdmin();
}
?>

<?php if (!empty($this->get('topics'))): ?>
    <ul class="list-group">
        <?php foreach ($this->get('topics') as $topic): ?>
            <?php $forum = $forumMapper->getForumById($topic->getForumId()); ?>
            <?php if (is_in_array($groupIdsArray, explode(',', $forum->getReadAccess())) || $adminAccess == true): ?>
                <?php $lastPost = $topicMapper->getLastPostByTopicId($topic->getId()) ?>
                <?php $date = new \Ilch\Date($lastPost->getDateCreated()); ?>
                <li class="list-group-item">
                    <?php if ($this->getUser()): ?>
                        <?php if (in_array($this->getUser()->getId(), explode(',', $lastPost->getRead()))): ?>
                            <img src="<?=$this->getStaticUrl('../application/modules/forum/static/img/forum_read.png') ?>" style="float: left; margin-top: 8px;">
                        <?php else: ?>
                            <img src="<?=$this->getStaticUrl('../application/modules/forum/static/img/topic_unread.png') ?>" style="float: left; margin-top: 8px;">
                        <?php endif; ?>
                    <?php else: ?>
                        <img src="<?=$this->getStaticUrl('../application/modules/forum/static/img/forum_read.png') ?>" style="float: left; margin-top: 8px;">
                    <?php endif; ?>
                    <a href="<?=$this->getUrl(['module' => 'forum', 'controller' => 'showposts', 'action' => 'index', 'topicid' => $lastPost->getTopicId()]) ?>">
                        <?=$topic->getTopicTitle() ?>
                    </a>
                    <br />
                    <small><?=$date->format("d.m.y - H:i", true) ?> <?=$this->getTrans('clock') ?></small>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div class="panel-body">
        <?=$this->getTrans('noPosts') ?>
    </div>
<?php endif; ?>
