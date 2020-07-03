<?php
 
use yii\widgets\ListView;
 
?>
<div class="birthing-index ibox float-e-margins ibox-content">
 
    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>COMPLAINT</th>
                <th>START OF PREGNANCY</th>
                <th>EXPECTED DELIVERY</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ($records as $model) : ?>
                <tr data-key="<?= \yii\helpers\Url::to(['birthing/view', 'id' => $model->id]) ?>" title="Click to View">
					<td><?= $model->chief_complaint ?></td>
					<td><?= date('F d, Y', strtotime($model->start_of_pregnancy)) ?></td>
					<td><?= date('F d, Y', strtotime($model->end_of_pregnancy)) ?></td>
				</tr>
			<?php endforeach; ?>
        </tbody>
    </table>
</div>
