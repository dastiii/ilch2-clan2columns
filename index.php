<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?=$this->getHeader() ?>

    <link href="<?=$this->getLayoutUrl('css/app.css?id=2e211915996888919501') ?>" rel="stylesheet">
    <?=$this->getCustomCSS() ?>

    <script src="<?= $this->getLayoutUrl('js/app.js?id=56a27d1935a8a43a59a2') ?>"></script>
</head>
<body>
    <div id="clan2columns">
        <div class="container">
            <header class="pageHeader">
                <h1><?= $this->getTitle() ?></h1>
            </header>
            <nav class="navbar navbar-default navbar-custom">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#">Navigation</a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <?php
                                $menuTemplate = '
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">%s <span class="caret"></span></a>
                                        %c
                                    </li>
                                ';
                                echo $this->getMenu(1, $menuTemplate, [
                                    'menus' => [
                                        'ul-class-root' => 'dropdown-menu',
                                        'ul-class-child' => '',
                                        'allow-nesting' => false,
                                    ],
                                    'boxes' => [
                                        'render' => false,
                                    ],
                                ]);
                            ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?= $this->getBox('user', 'login', 'login.navbar'); ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="content-wrapper">
                    <main class="content">
                        <div class="breadcrumb_container">
                            <?= $this->getHmenu(); ?>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?=$this->getContent() ?>
                            </div>
                        </div>
                    </main>
                    <aside class="sidebar">
                        <div class="panel box">
                        <?=
                            $this->getMenu(2,'<div class="panel-heading"><i class="fa fa-navicon"></i> %s</div> %c', [
                                'menus' => [
                                    'ul-class-root' => 'list-group ilch_menu_ul',
                                    'ul-class-child' => '',
                                    'li-class-root' => 'list-group-item',
                                ],
                                'boxes' => [
                                    'render' => true,
                                ],
                            ]);
                        ?>
                        </div>
                    </aside>
                </div>
            </div>
            <footer>
                <span class="label label-footer">&copy; 2016</span>
            </footer>
        </div>
    </div>
</body>
</html>
