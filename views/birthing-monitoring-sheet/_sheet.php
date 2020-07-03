<?php
use yii\helpers\Url;
?>

    <tr data-key="<?= Url::to(['birthing-monitoring-sheet/view', 'id' => $model->id]) ?>" title="Click to View">
    	<td>
			<?= $model->patient ?>
		</td>
		<!--<td>-->
		<!--	<?= $model->fdate ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->blood_pressure ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->pulse ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->respiration ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->urine_output ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->cvp_level ?>-->
		<!--</td>-->
	</tr> 
       