
<tr data-key="<?= \yii\helpers\Url::to(['complaint/view', 'id' => $model->id]) ?>" title="Click to View">
	<td><?= ucwords($model->name) ?></td>
	<td><?= $model->description ?></td>
	<td><?= Yii::$app->params['status'][$model->status] ?></td>
</tr>
