<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<table class="table table-bordered data">
    <thead>
        <tr>
            <th>date</th>
            <th>BP</th>
            <th>WT</th>
            <th>PR</th>
  
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model->opd as $opd) : ?>
           	<tr data-key="<?= Url::to(['dots-opd-record/view', 'id' => $opd->id]) ?>" title="Click to View">
				<td>
					<?= $opd->date ?>
				</td>
				<td>
					<?= $opd->bp ?>
				</td>
				<td>
					<?= $opd->wt ?>
				</td>

				<td>
                    <?= $opd->pr ?>
				</td>
			</tr> 
        <?php endforeach; ?>
    </tbody>
</table>
