<?php
use yii\helpers\Url;
?>


           	<tr data-key="<?= Url::to(['dots-tb-treatment/view', 'id' => $model->id]) ?>" title="Click to View">
				<td>
					<?= $model->dots->patientName ?>
				</td>
			</tr> 