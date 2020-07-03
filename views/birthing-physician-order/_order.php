<?php
use yii\helpers\Url;  
?>

<tr data-key="<?= Url::to(['birthing-physician-order/view', 'id' => $model->id]) ?>" title="Click to View">
    <td>
        <?= $model->patient ?>
    </td>
	<!--<td>-->
	<!--	<?= $model->fdate ?>-->
	<!--</td>-->
	<!--<td>-->
	<!--	<?= $model->prescription ?>-->
	<!--</td>-->
</tr> 
