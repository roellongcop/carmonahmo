<di class="row">
    <div class="col-md-4 col-xs-4 text-center">
        <img src="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/images.jpg" style="    width: 100px;"> <br><br>
    </div>
    <div class="col-md-4 col-xs-4 text-center">
    <div class="text-center">
        <h2 style="font-size: 21px;">CARMONA MUNICIPAL HEALTH OFFICE <br> CLINICAL LABORATORY</h2>
        <p><?= Yii::$app->template->getAbout('address') ?> <br> 
        Tel. No. <?= Yii::$app->template->getAbout('contact number') ?></p>
        <h3><?= $title ?></h3>
    </div>
    </div>
    <div class="col-md-4 col-xs-4 text-center">
        <img src="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/images.jpg" style="    width: 100px;"> <br><br>
    </div>
</di>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="col-md-1 col-xs-1">NAME: </div>
        <div class="col-md-6 col-xs-6 underline">
            <?= $model->patient ?>
        </div>
        <div class="col-md-1 col-xs-1">DATE: </div>
        <div class="col-md-4 col-xs-4 underline" >
            <?=$model->fdate ?>
        </div>
    </div>
</div>

 <div class="row" style="padding-top: 10px;">
    <div class="col-md-12 col-xs-12">
        <div class="col-md-1 col-xs-1">AGE: </div>
        <div class="col-md-1 col-xs-1 underline">
            <?=$model->user->age ?>
        </div>
        <div class="col-md-1 col-xs-1">SEX: </div>
        <div class="col-md-1 col-xs-1 underline">
            <?=$model->user->sex ?>
        </div>
        <div class="col-md-1 col-xs-1">BRGY: </div>
        <div class="col-md-2 col-xs-2 underline">
            <?=ucfirst($model->user->address) ?>
        </div>
        <div class="col-md-2 col-xs-3">REQUESTED BY: </div>
        <div class="col-md-3 col-xs-2 underline" style="margin-left: -4%">
            <?=$model->staff ?>
        </div>
    </div>
</div>