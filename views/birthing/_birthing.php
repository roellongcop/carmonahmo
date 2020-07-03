<tr data-key="<?= \yii\helpers\Url::to(['birthing/view', 'id' => ($model->user)? $model->user->id: '']) ?>" title="Click to View">

	<td><?= ucwords(($model->user)? $model->user->name: '') ?></td>
	<!--<td><?= $model->chief_complaint ?></td>-->
	<!--<td><?= date('F d, Y', strtotime($model->start_of_pregnancy)) ?></td>-->
	<!--<td><?= date('F d, Y', strtotime($model->end_of_pregnancy)) ?></td>-->
	<!--<td><?= Yii::$app->params['status'][$model->status] ?></td>-->
</tr>
