<?php $users = $this->get('usersOnline'); ?>

    
<div class="panel-body">
    <?=$this->getTrans('onlineUser') ?>: <?=count($users) ?>
</div>
<?php if (!empty($users)): ?>
    <ul class="list-group">
        <?php foreach ($users as $user): ?>
            <li class="list-group-item">
                <i class="fa fa-user"></i>
                <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'profil', 'action' => 'index', 'user' => $user->getId()]) ?>"><?=$this->escape($user->getName()) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<div class="panel-body">
    <?=$this->getTrans('onlineGuest') ?>: <?=$this->get('guestOnline') ?>
</div>
