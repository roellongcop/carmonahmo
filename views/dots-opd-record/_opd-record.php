<?php
use yii\helpers\Url;
?>


           	<tr data-key="<?= Url::to(['dots-opd-record/view', 'id' => $model->id]) ?>" title="Click to View">
					<td>
					<?= $model->dots->patientName ?>
				</td>
					<td>
					<?= $model->date ?>
				</td>
				<td>
					<?= $model->bp ?>
				</td>
				<td>
					<?= $model->wt ?>
				</td>

				<td>
                    <?= $model->pr ?>
				</td>
			</tr> 