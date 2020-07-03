<?php
use yii\helpers\Url;
?>


   	<tr data-key="<?= Url::to(['birthing-assessment/view', 'id' => $model->id]) ?>" title="Click to View">
   		<td>
			<?= $model->patient ?>
		</td>
		<!--<td>-->
		<!--	<?= $model->fdate ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->chief_complaint ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->assessment ?>-->
		<!--</td>-->
		<!--<td>-->
		<!--	<?= $model->intervention ?>-->
		<!--</td>-->
	</tr> 
