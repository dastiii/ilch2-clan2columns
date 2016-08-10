<?php if ($this->get('jobs') != ''): ?>
    <ul class="list-group">
        <?php foreach ($this->get('jobs') as $job): ?>
            <li class="list-group-item">
                <a href="<?=$this->getUrl('jobs/index/show/id/' . $job->getId()) ?>">
                    <?=$job->getTitle() ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div class="panel-body">
        <?=$this->getTrans('noJobs') ?>
    </div>
<?php endif; ?>
