<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<table class="table table-bordered data">
    <thead>
        <tr>
            <th>DATE</th>
            <th>COMPLAINT</th>
            <th>ASSESSMENT</th>
            <th>INTERVENTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model->assessment as $assess) : ?>
           	<tr data-key="<?= Url::to(['birthing-assessment/view', 'id' => $assess->id]) ?>" title="Click to View">
				<td>
					<?= $assess->fdate ?>
				</td>
				<td>
					<?= $assess->chief_complaint ?>
				</td>
				<td>
					<?= $assess->assessment ?>
				</td>
				<td>
					<?= $assess->intervention ?>
				</td>
			</tr> 
        <?php endforeach; ?>
    </tbody>
</table>
