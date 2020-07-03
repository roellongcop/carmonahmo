
<tr data-key="<?= \yii\helpers\Url::to(['water-lab/view', 'id' => $model->id]) ?>" title="Click to View">
	<td><?= ucwords($model->patientName) ?></td>
	<!--<td><?= $model->sampling_collected_by ?></td>-->
	<!--<td><?= $model->sampling_date_time ?></td>-->
 <!--   <td><?= ($model->result !== null)?Yii::$app->params['result'][$model->result]:'Not set' ?></td>-->
</tr>
