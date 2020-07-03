<?php if($model->user_type == 0) : ?>
    <tr data-key="<?= \yii\helpers\Url::to(['user/view', 'id' => $model->id]) ?>" title="Click to View">
		<td><?= ucwords($model->name) ?></td>
		<td><?= $model->username ?></td>
		<td><?= Yii::$app->params['gender'][$model->gender] ?></td>
		<td><?= Yii::$app->params['user_status'][$model->status] ?></td>
	</tr>
<?php endif; ?>
