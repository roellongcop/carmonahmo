<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<table class="table table-bordered data">
    <thead>
        <tr>
            <th>DATE</th>
            <th>WEIGHT</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model->weightProgress as $data) : ?>
            <tr data-key="<?= Url::to(['birthing-weight-progress/view', 'id' => $data->id]) ?>" title="Click to View">
				<td>
					<?= $data->fdate ?>
				</td>
				<td>
					<?= $data->weight ?>
				</td>
				
			</tr> 
        <?php endforeach; ?>
    </tbody>
</table>
