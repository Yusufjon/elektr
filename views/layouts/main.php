<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\BackendAsset;
use yii\app\homeUrl;
use yii\helpers\Url;

BackendAsset::register($this);



?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
	
<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="<?= Yii::$app->homeUrl?>" class="logo"><b>Админ Чақмоқ</b></a>
        <!--logo end-->
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a data-method="POST" class="logout" href="<?= Url::to(['site/login'])?>">Тизимдан чиқиш</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <a href="<?= Url::to(['default/'])?>"><p style="color:white" class="centered"><img src="<?=Yii::$app->homeUrl?>web/images/logo.png" class="img-circle" width="60"><i>Chaqmoq Elektrik</i></p></a>
          

                <?php $controller = Yii::$app->controller->id; ?>
                <li class="mt">
                    <a class="<?= ($controller=='default')?'active':''?>" href="<?= Url::to(['default/'])?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Бош сахифа</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a class="<?= ($controller=='post')?'active':''?>" href="<?= Url::to(['post/'])?>" >
                        <i class="fa fa-newspaper-o"></i>
                        <span>Бош сатрни тахрирлаш</span>
                    </a>
                </li>

                <li>
                    <a  class="<?= ($controller=='contact')?'active':''?>" href="<?= Url::to(['contact/'])?>">
                        <i class="fa fa-list"></i>
                        <span>Янги хабарлар</span>
                    </a>
                </li>
                <li>
                    <a  class="<?= ($controller=='contact')?'active':''?>" href="<?= Url::to(['youtube/'])?>">
                        <i class="fa fa-list"></i>
                        <span>Видео жойлаш</span>
                    </a>
                </li>
             
                
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <?= $content ?>

        </section>
    </section>


</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
                         