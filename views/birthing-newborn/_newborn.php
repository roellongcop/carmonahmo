<?php 
use yii\helpers\Url;
?>

<tr data-key="<?= Url::to(['birthing-newborn/view', 'id' => $model->id]) ?>" title="Click to View">
	<td>
		<?= $model->patient ?>
	</td>
	<!--<td>-->
	<!--	<?= $model->date_delivered ?>-->
	<!--	<?= $model->time_delivered ?>-->
	<!--</td>-->
	<!--<td>-->
	<!--	<?= $model->baby_name ?>-->
	<!--</td>-->
	<!--<td>-->
	<!--	<?= $model->sex ?>-->
	<!--</td>-->
	<!--<td>-->
	<!--	<?= $model->delivery ?>-->
	<!--</td> -->
</tr> 
