<?php $this->title = 'MHO | Carmona' ?>

<?= $this->render('_header', ['name' => $about]) ?>

                    
<?= $this->render('_banner',  ['name' => $about]) ?>


<?= $this->render('_about_appointment', [
	'name' => $about, 
	'model' => $model,
	'complaints' => $complaints,
	'limit' => $limit,
	//'item_time' => $item_time
]) ?>

 
<?= $this->render('_activity', ['activities' => $activities]) ?>


<?= $this->render('_staffs', ['doctors' => $doctors]) ?>

                            
<?= $this->render('_footer', ['name' => $about]) ?>
