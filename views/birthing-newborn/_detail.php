<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<table class="table table-bordered data">
    <thead>
        <tr>
            <th>DATE / TIME DELIVERED</th>
            <th>BABY NAME</th>
            <th>GENDER</th>
            <th>DELIVERY TYPE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model->newborn as $data) : ?>
            	<tr data-key="<?= Url::to(['birthing-newborn/view', 'id' => $data->id]) ?>" title="Click to View">
				<td>
					<?= $data->date_delivered ?>
					<?= $data->time_delivered ?>
				</td>
				<td>
					<?= ucwords($data->baby_name) ?>
				</td>
				<td>
					<?= $data->sex ?>
				</td>
				<td>
					<?= $data->delivery ?>
				</td> 
			</tr> 
        <?php endforeach; ?>
    </tbody>
</table>
