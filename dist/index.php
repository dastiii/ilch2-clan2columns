<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ilch 2.0</title>
    <link href="<?=$this->getLayoutUrl('css/clan2columns.min.css') ?>" rel="stylesheet">
    <script src="<?= $this->getLayoutUrl('js/clan2columns.min.js') ?>"></script>
</head>
<body>
    <div class="container">
        <header class="pageHeader">
            <h1></h1>
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
                                    'li-class-root' => '',
                                    'li-class-child' => '',
                                ],
                                'boxes' => [
                                    'render' => false,
                                ],
                            ]);
                        ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Welcome<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Edit your profile</a></li>
                                <li><a href="#">Another action</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('backend.users.index') }}">
                                        <i class="fa fa-th-large fa-fw" style="font-size:14px;"></i> Administration
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('auth.logout') }}">
                                        <i class="fa fa-sign-out fa-fw"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#">Sign in</a>
                        </li>
                        <li class="signup-or-signin">or</li>
                        <li class="signup">
                            <a href="#">
                                <i class="fa fa-sign-in fa-fw"></i> Sign up now!
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="content-wrapper">
                <main class="content">
                    <div class="breadcrumb_container">
                        <div class="breadcrumb_container">
                            <ol class="breadcrumb">
                                <li class="active">Home</li>
                            </ol>
                        </div>
                    </div>
<!--                     <div class="content-wrapper">
                        <div class="content-full-width"> -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?=$this->getContent() ?>
                                </div>
                            </div>
<!--                         </div>
                    </div> -->
                </main>
                <aside class="sidebar">
                    <div class="panel box">
                    <?= 
                        $this->getMenu(2,'<div class="panel-heading"><i class="fa fa-navicon"></i> %s</div> %c', [
                            'menus' => [
                                'ul-class-root' => 'list-group ilch_menu_ul',
                                'ul-class-child' => '',
                                'li-class-root' => 'list-group-item',
                                'li-class-child' => '',
                            ],
                            'boxes' => [
                                'render' => true,
                            ],
                        ]);
                    ?>
                    </div>
                    <!-- <div class="panel box">
                        <div class="panel-heading">
                            <i class="fa fa-gamepad fa-fw"></i> Community Scoreboard
                            <div class="btn-group pull-right">
                                <button 
                                    type="button" 
                                    class="btn btn-xs text-uppercase dropdown-toggle" 
                                    data-toggle="dropdown" 
                                    aria-haspopup="true" 
                                    aria-expanded="false"
                                >
                                    more <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-bars fa-fw"></i> show more</a></li>
                                    <li><a href="#"><i class="fa fa-plus-circle fa-fw"></i> submit match</a></li>
                                </ul>
                            </div>
                        </div>
                        <table class="table table-striped table-condensed">
                            <tbody>
                                <tr>
                                    <td class="text-right">Kevin Falk Ltd.</td>
                                    <td class="shrink">vs.</td>
                                    <td class="text-left">Kevin Falk Industries</td>
                                    <td class="shrink"><span class="text-success">2</span>:<span class="text-danger">0</span></td>
                                    <td class="shrink">
                                        <a href="#">
                                            <i class="fa fa-arrow-circle-o-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">Kevin Falk Ltd.</td>
                                    <td class="shrink">vs.</td>
                                    <td class="text-left">Kevin Falk Industries</td>
                                    <td class="shrink"><span class="text-success">2</span>:<span class="text-danger">0</span></td>
                                    <td class="shrink">
                                        <a href="#">
                                            <i class="fa fa-arrow-circle-o-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">Kevin Falk Ltd.</td>
                                    <td class="shrink">vs.</td>
                                    <td class="text-left">Kevin Falk Industries</td>
                                    <td class="shrink"><span class="text-success">2</span>:<span class="text-danger">0</span></td>
                                    <td class="shrink">
                                        <a href="#">
                                            <i class="fa fa-arrow-circle-o-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">Kevin Falk Ltd.</td>
                                    <td class="shrink">vs.</td>
                                    <td class="text-left">Kevin Falk Industries</td>
                                    <td class="shrink"><span class="text-success">2</span>:<span class="text-danger">0</span></td>
                                    <td class="shrink">
                                        <a href="#">
                                            <i class="fa fa-arrow-circle-o-right"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="panel-footer">
                            
                        </div>
                        <div class="panel-heading inner">
                            <i class="fa fa-bars fa-fw"></i> Forums
                            <a href="#" class="btn btn-xs text-uppercase pull-right">
                                more
                            </a>
                        </div>
                        <table class="table table-striped table-condensed forums">
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="thread-title" href="#">Introduce yourself!</a><br>
                                        <small><span class="text-muted">by <a href="#">kevin</a> <span class="post-time-diff">1 hour ago</span></span></small>
                                    </td>
                                    <td class="shrink post-count">
                                        <span>5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="thread-title" href="#">Introduce yourself!</a><br>
                                        <small><span class="text-muted">by <a href="#">kevin</a> <span class="post-time-diff">1 hour ago</span></span></small>
                                    </td>
                                    <td class="shrink post-count">
                                        <span>5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="thread-title" href="#">Introduce yourself!</a><br>
                                        <small><span class="text-muted">by <a href="#">kevin</a> <span class="post-time-diff">1 hour ago</span></span></small>
                                    </td>
                                    <td class="shrink post-count">
                                        <span>5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="thread-title" href="#">Introduce yourself!</a><br>
                                        <small><span class="text-muted">by <a href="#">kevin</a> <span class="post-time-diff">1 hour ago</span></span></small>
                                    </td>
                                    <td class="shrink post-count">
                                        <span>5</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="panel-footer"></div>
                        <div class="panel-heading inner">
                            Panel
                            <a href="#" class="btn btn-xs text-uppercase pull-right">
                                more
                            </a>
                        </div>
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="panel-footer"></div>
                    </div> -->
                </aside>
            </div>
        </div>
        <footer>
            <span class="label label-footer">&copy; 2016</span>
        </footer>
    </div>
    

    <!-- JavaScripts -->
    
</body>
</html>
