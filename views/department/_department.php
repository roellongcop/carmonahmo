<tr data-key="<?= \yii\helpers\Url::to(['department/view', 'id' => $model->id]) ?>" title="Click to View">
	<td><?= ucwords($model->staff) ?></td>
	<td><?= ucwords($model->name) ?></td>
	<td><?= $model->description ?></td>
	<td><?= Yii::$app->params['status'][$model->status] ?></td>
</tr>
