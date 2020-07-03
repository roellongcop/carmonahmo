<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Update Profile';
$this->params['breadcrumbs'][] = 'Update';
$this->params['page'] = 'Profile';
?>
<div class="user-update ibox float-e-margins ibox-content">


    

	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#personal">Personal Information</a></li>
		<li><a data-toggle="tab" href="#account">Account Information</a></li>
	</ul>

	<div class="tab-content">
		<div id="personal" class="tab-pane fade in active"> <br>
			<?= $this->render('_profile_form', [
		        'model' => $model,
		        'modelUpload' => $modelUpload
		    ]) ?>
		</div>
		<div id="account" class="tab-pane fade"> <br>
			<?= $this->render('_account', [
		        'account' => $account,
		    ]) ?>
		</div>
	</div>

</div>
