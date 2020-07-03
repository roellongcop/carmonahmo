<?php 
use yii\helpers\Html;
?> 

<section class="banner-area relative" style="background: url('<?= Yii::$app->template->getAbout('image_path') ?>') no-repeat center;  background-size: cover;">
    <div class="overlay overlay-bg"></div>  
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8 col-md-12">
                <h1>
                    Carmona Health Services
                </h1><br>
                <?= Html::a('Register Here', ['register'], [
                    'class' => 'primary-btn text-uppercase'
                ]) ?>
            </div>                                      
        </div>
    </div>                  
</section>