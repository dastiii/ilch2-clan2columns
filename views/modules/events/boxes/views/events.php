<?php if ($this->get('eventList') != ''): ?>
    <ul class="list-group">
        <?php foreach ($this->get('eventList') as $eventlist): ?>
            <?php $date = new \Ilch\Date($eventlist->getStart()); ?>
            <li class="list-group-item">
                <i class="fa fa-calendar"></i>
                <a href="<?=$this->getUrl('events/show/event/id/' . $eventlist->getId()) ?>">
                    <?=((strlen($this->escape($eventlist->getTitle()))<15) ? $this->escape($eventlist->getTitle()) : substr($this->escape($eventlist->getTitle()),0,15).'...') ?>
                </a>
                <span class="small pull-right"><?=$date->format("d.m", true) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div class="panel-body">
        <?=$this->getTrans('noEvent') ?>
    </div>
<?php endif; ?>
<div class="panel-body text-center">
    <a href="<?=$this->getUrl('events/index/index/') ?>"><?=$this->getTrans('otherEvents') ?></a>
</div>
