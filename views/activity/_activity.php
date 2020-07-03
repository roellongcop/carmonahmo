<tr data-key="<?= \yii\helpers\Url::to(['activity/view', 'id' => $model->id]) ?>" title="Click to View">
	<td><?= ucwords($model->name) ?></td>
	<td><?= $model->description ?></td>
	<td><?= $model->day ?></td>
	<td><?= $model->time ?></td>
	<td><?= Yii::$app->params['status'][$model->status] ?></td>
</tr>
