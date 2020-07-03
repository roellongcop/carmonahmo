<?php
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;

?>
<div id="wrapper"> 
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <div class="row">
                            <div class="col-md-5">
                                <img alt="image" 
                                    class="img-circle" 
                                    src="<?= (!empty(Yii::$app->user->identity->image_path))?Yii::$app->user->identity->image_path:Yii::$app->urlManager->baseUrl . '/resources/backend/img/profile_small.JPG' ?>" width="50" height="50">
                            </div>                        
                            <div class="col-md-7 text-center">
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold white">
                                        <?= ucwords(Yii::$app->user->identity->name) ?>
                                    </strong>
                                </span>
                                <span class="text-muted text-xs block">
                                    <?= Yii::$app->user->identity->_user_type?>
                                </span> 
                            </div>
                        </div> 
                    </div>
                    <div class="logo-element"> MHO </div>
                </li>



                    <?= $this->render('_doctor_menu') ?>
                    

            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                        <div class="form-group"><br> 
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right"> 
                    <?= $this->render('_client_notif') ?>
                    <li style="margin-top: 10px;">
                        <?= Html::beginForm(['/site/logout'], 'post', ['id' => 'frm-logout']) ?>
                        <?= Html::endForm() ?>
                        <?= Html::a(' <i class="fa fa-sign-out"></i> Log out', '#', [
                            'id' => 'btn-logout'
                        ]) ?>
                    </li> 
                </ul>
                <br>
            </nav>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-7">
                <h2><?= Html::encode($this->title) ?></h2>
                <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'Dashboard', 'url' => ['dashboard/index']],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div>
            <div class="col-sm-5">
                <div class="title-action"> 
                    <?= Yii::$app->template->button('create') ?>
                </div>
            </div>
        </div>


        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="ibox float-e-margins">
                        <div class="ibox-content"> -->