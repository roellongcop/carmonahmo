<tr data-key="<?= \yii\helpers\Url::to(['about/view', 'id' => $model->id]) ?>" title="Click to View">

		<td><?= ucwords($model->legend) ?></td>
		<td><?= $model->detail ?></td>
		<td><?= Yii::$app->params['status'][$model->status] ?></td>
		
	</tr>
