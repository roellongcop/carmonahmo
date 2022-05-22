<section class="team-area section-gap" id="med">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-7">
                <div class="title text-center">
                    <h1 class="mb-10">Medical Staffs</h1>
               </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
            <?php foreach ($doctors as $doctor) : ?>
                <div class="col-lg-3 col-md-6 single-team text-center"> 
                    <img class="img-fluid" src="<?= (!empty($doctor->image_path))? $doctor->image_path: Yii::$app->params['frontendPath'] . 'image.JPG' ?>" alt="" style="border-radius: 50%;
                        width: 200px;
                        height: 200px;"><br>
                        
                    <div class="align-items-end justify-content-center d-flex">
                        
                        <h4 class="text-center"> <br>
                            <?= ucwords($doctor->name) ?><br>
                            <small>
                                <?= ucwords($doctor->department['name'] ?? '') ?>
                            </small>
                        </h4>                                    
                    </div>
                </div>  
            <?php endforeach; ?>
        </div>
    </div>
</section>