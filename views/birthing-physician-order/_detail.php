<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<table class="table table-bordered data">
    <thead>
        <tr>
            <th>DATE</th>
            <th>PRESCRIPTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model->physician as $data) : ?>
            <tr data-key="<?= Url::to(['birthing-physician-order/view', 'id' => $data->id]) ?>" title="Click to View">
				<td>
					<?= $data->fdate ?>
				</td>
				<td>
					<?= $data->prescription ?>
				</td>
			</tr> 
        <?php endforeach; ?>
    </tbody>
</table>
