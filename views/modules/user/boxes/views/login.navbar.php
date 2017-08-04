<?php if ($this->getUser() !== null): ?>
    <!-- <div id="checknewmessage"></div> -->
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?=$this->getTrans('hello') ?>, <?=$this->escape($this->getUser()->getName()) ?><span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'panel', 'action' => 'index']) ?>">
                    <i class="fa fa-users fa-fw"></i> <?=$this->getTrans('userPanel') ?>
                </a>
            </li>
            <?php if ($this->get('userAccesses') || $this->getUser()->isAdmin()): ?>
                <li role="separator" class="divider"></li>
                <li>
                    <a href="<?=$this->getUrl(['module' => 'admin', 'controller' => 'admin', 'action' => 'index']) ?>">
                        <i class="fa fa-th-large fa-fw" style="font-size:14px;"></i> <?=$this->getTrans('admincenter') ?>
                    </a>
                </li>
            <?php endif; ?>
            <li role="separator" class="divider"></li>
            <li>
                <a href="<?=$this->getUrl(['module' => 'admin/admin', 'controller' => 'login', 'action' => 'logout', 'from_frontend' => 1]) ?>">
                    <i class="fa fa-sign-out fa-fw"></i> <?=$this->getTrans('logout') ?>
                </a>
            </li>
        </ul>
    </li>
<?php else: ?>
    <li>
        <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'login', 'action' => 'index']) ?>">
            <i class="fa fa-sign-in fa-fw"></i>  <?= $this->getTrans('Einloggen'); ?>
        </a>
    </li>
    <li class="signup-or-signin">oder</li>
    <li class="signup">
        <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'regist', 'action' => 'index']) ?>">
            <i class="fa fa-user-plus fa-fw"></i> <?= $this->getTrans('register'); ?>
        </a>
    </li>
<?php endif; ?>

<script>
$(document).ready(function() {
    window.setInterval(function() {
        loadMessage();
        function loadMessage() {
            $('#checknewmessage').load('<?=$this->getUrl(['module' => 'user', 'controller' => 'ajax','action' => 'checknewmessage']); ?>');
        };
    }, 5000);
});
</script>
