<?php 
use yii\widgets\DetailView;

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        [
            'label' => 'Fullname', 
            'value' => ucwords($model->name)
        ],
        [
            'label' => 'Gender', 
            'value' => Yii::$app->params['gender'][$model->gender]
        ],
        'age',
        [
            'label' => 'Birthday', 
            'value' => date('F d, Y', strtotime($model->birthday))
        ],
        '_address:ntext',

        [
            'label' => 'Educational Attainment', 
            'value' => Yii::$app->params['educational_attainment'][$model->educational_attainment]
        ],

        [
            'label' => 'Employment Status', 
            'value' => Yii::$app->params['employment_status'][$model->employment_status]
        ],


         [
            'label' => 'Civil Status', 
            'value' => Yii::$app->params['civil_status'][$model->civil_status]
        ],

        'dswd_nhtsmember',
        'family_household_number', 
    ],
]) ?>