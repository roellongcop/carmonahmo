<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<table class="table table-bordered data">
    <thead>
        <tr>
            <th>TB CASE NUMBER</th>
            <th>NAME OF DOTS FACILITY</th>
            <th>REGION</th>
            <th>DIAGNOSE</th>
  
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model->treatment as $treatment) : ?>
           	<tr data-key="<?= Url::to(['dots-tb-treatment/view', 'id' => $treatment->id]) ?>" title="Click to View">
				<td>
					<?= $treatment->tb_case_number ?>
				</td>
				<td>
					<?= $treatment->name_of_dots_facility ?>
				</td>
				<td>
					<?= $treatment->region ?>
				</td>

				<td>
                    <?= $treatment->diagnosis ?>
				</td>
			</tr> 
        <?php endforeach; ?>
    </tbody>
</table>
