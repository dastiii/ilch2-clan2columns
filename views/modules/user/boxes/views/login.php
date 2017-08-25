<?php if ($this->getUser() !== null): ?>
    <div class="panel-body">
        <?=$this->getTrans('hello') ?> <b><?=$this->escape($this->getUser()->getName()) ?></b>!
        <div id="checknewmessage"></div>
    </div>
    <ul class="list-group ilch_menu_ul">
        <li class="list-group-item">
            <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'panel', 'action' => 'index']) ?>">
                <i class="fa fa-users"></i> <?=$this->getTrans('userPanel') ?>
            </a>
        </li>
        <?php if ($this->get('userAccesses') || $this->getUser()->isAdmin()): ?>
            <li class="list-group-item">
                <a target="_blank" href="<?=$this->getUrl(['module' => 'admin', 'controller' => 'admin', 'action' => 'index']) ?>">
                    <i class="fa fa-unlock"></i> <?=$this->getTrans('admincenter') ?>
                </a>
            </li>
        <?php endif; ?>
        <li class="list-group-item">
            <a href="<?=$this->getUrl(['module' => 'admin/admin', 'controller' => 'login', 'action' => 'logout', 'from_frontend' => 1]) ?>">
                <i class="fa fa-sign-out"></i> <?=$this->getTrans('logout') ?>
            </a>
        </li>
    </ul>
<?php else: ?>
    <div class="panel-body">
        <form action="<?=$this->getUrl(['module' => 'user', 'controller' => 'login', 'action' => 'index']) ?>" class="form-horizontal" method="post">
            <input type="hidden" name="login_redirect_url" value="<?=$this->get('redirectUrl')?>" />
            <?php
            echo $this->getTokenField();
            $errors = $this->get('errors');
            ?>
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text"
                               class="form-control"
                               name="login_emailname"
                               placeholder="<?=$this->getTrans('nameEmail') ?>" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="password"
                               class="form-control"
                               name="login_password"
                               placeholder="<?=$this->getTrans('password') ?>" />
                    </div>
                </div>
            </div>
            <label>
                <input type="checkbox"
                       name="rememberMe"
                       value="rememberMe"> <?=$this->getTrans('rememberMe') ?>
            </label>
            <div class="form-group">
                 <div class="col-lg-4">
                    <button type="submit" class="btn" name="login">
                        <?=$this->getTrans('login') ?>
                    </button>
                 </div>
            </div>
        </form>
        <?php if ($this->get('regist_accept') == '1'): ?>
            <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'regist', 'action' => 'index']); ?>"><?=$this->getTrans('register'); ?></a><br />
        <?php endif; ?>
        <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'login', 'action' => 'forgotpassword']) ?>"><?=$this->getTrans('forgotPassword') ?></a>
    </div>
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
