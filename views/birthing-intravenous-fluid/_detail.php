<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<table class="table table-bordered data">
    <thead>
        <tr>
            <th>DATE</th>
            <th>BAG NO</th>
            <th>SOLUTION</th>
            <th>BLOOD</th>
            <th>TIME START</th>
            <th>TIME END</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model->intravenous as $data) : ?>
            <tr data-key="<?= Url::to(['birthing-intravenous-fluid/view', 'id' => $data->id]) ?>" title="Click to View">
				<td> <?= $data->fdate ?> </td>
				<td> <?= $data->bag_no ?> </td>
				<td> <?= $data->solution ?> </td>
				<td> <?= $data->blood ?> </td>
				<td> <?= $data->startTime ?> </td>
				<td> <?= $data->endTime ?> </td>
			</tr> 
        <?php endforeach; ?>
    </tbody>
</table>
