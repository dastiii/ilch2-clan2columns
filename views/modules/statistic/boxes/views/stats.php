<?php $date = new \Ilch\Date(); ?>
    
<ul class="list-group">
    <li class="list-group-item">
        <a href="<?=$this->getUrl('statistic/index/online') ?>"><?=$this->getTrans('statOnline') ?>: <?=$this->get('visitsOnline') ?></a>
    </li>
    <li class="list-group-item">
        <?=$this->getTrans('statToday') ?>: <?=$this->get('visitsToday') ?>
    </li>
    <li class="list-group-item">
        <?=$this->getTrans('statYesterday') ?>: <?=$this->get('visitsYesterday') ?>
    </li>
    <li class="list-group-item">
        <a href="<?=$this->getUrl('statistic/index/show/year/'.$date->format("Y", true).'/month/'.$date->format("m", true)) ?>"><?=$this->getTrans('statMonth') ?>: <?=$this->get('visitsMonth') ?></a>
    </li>
    <li class="list-group-item">
        <a href="<?=$this->getUrl('statistic/index/show/year/'.$date->format("Y", true)) ?>"><?=$this->getTrans('statYear') ?>: <?=$this->get('visitsYear') ?></a>
    </li>
    <li class="list-group-item">
        <?=$this->getTrans('statUserRegist') ?>: <?=$this->get('visitsRegistUser') ?>
    </li>
    <li class="list-group-item">
        <a href="<?=$this->getUrl('statistic/index/index') ?>"><?=$this->getTrans('statTotal') ?>: <?=$this->get('visitsTotal') ?></a>
    </li>
</ul>
