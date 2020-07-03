<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<table class="table table-bordered data">
    <thead>
        <tr>
            <th>DATE</th>
            <th>BLOOD PRESSURE</th>
            <th>PULSE</th>
            <th>RESPIRATION</th>
            <th>URINE OUTPUT</th>
            <th>CVP LEVEL</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model->sheet as $data) : ?>
            <tr data-key="<?= Url::to(['birthing-monitoring-sheet/view', 'id' => $data->id]) ?>" title="Click to View">
				<td>
					<?= $data->fdate ?>
				</td>
				<td>
					<?= $data->blood_pressure ?>
				</td>
				<td>
					<?= $data->pulse ?>
				</td>
				<td>
					<?= $data->respiration ?>
				</td>
				<td>
					<?= $data->urine_output ?>
				</td>
				<td>
					<?= $data->cvp_level ?>
				</td>
			</tr> 
        <?php endforeach; ?>
    </tbody>
</table>
