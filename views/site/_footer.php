<?php
use yii\helpers\Html;
?>

<footer class="footer-area section-gap" id="contact">
    <div class="container">
        <div class="row">
                  
            <div class="col-lg-6  col-md-6">
                <div class="single-footer-widget mail-chimp">
                    <h3 class="mb-20">Contact Us</h3>
                    <p>
                        MHO Carmona is located at
                        <?= $name[4]->description ?>
                    </p>
                    <h3><?= $name[5]->description ?></h3><bR>
                    <?= Html::a('User Login', ['site/login']) ?> 
                </div>
            </div>                          
            <div class="col-lg-6  col-md-12">
                <div class="single-footer-widget newsletter">
                    <h6>Mission</h6>
                    <p><?= $name[2]->description ?></p>
                    <h6>Vision</h6>
                    <p><?= $name[3]->description ?></p>
                </div>
            </div>                  
        </div>
    </div>
</footer>