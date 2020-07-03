<?php 
use yii\helpers\Url;
?>

    <tr data-key="<?= Url::to(['birthing-intravenous-fluid/view', 'id' => $model->id]) ?>" title="Click to View">
    	<td>
			<?= $model->patient ?>
		</td>
		<!--<td>-->
		<!--	<?= $model->fdate ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->bag_no ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->solution ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->blood ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->startTime ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->endTime ?>-->
		<!--</td>-->
	</tr> 
