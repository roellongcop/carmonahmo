<tr data-key="<?= \yii\helpers\Url::to(['appointment/view', 'id' => $model->id]) ?>" title="Click to View">
	<?= Yii::$app->user->identity->role->name != 'Patient' ? 
       '<td>'. $model->patientName .'</td>' : '' ?>
	<td><?= ucwords($model->complaint->name) ?></td>
	<td><?= date('F d, Y', strtotime($model->scheduled_date)) ?></td>
	<td><?= $model->label ?></td>
</tr>