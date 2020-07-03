<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dots */
$this->params['page'] = 'Tb';
$this->params['second'] = 'TbProgram';


$this->title = ucwords($model[0]->patientName);
$this->params['breadcrumbs'][] = ['label' => 'Dots', 'url' => ['/dots']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-index ibox float-e-margins ibox-content">
<?php

for($x = 0 ; $x < sizeof($model) ; $x++){
 
?>
     <?= Yii::$app->template->button(['update', 'index'], $model[$x]) ?>
        <?= Yii::$app->template->link([
            'title' => 'Print',
            'url' => ['dots/print', 'id' => $model[$x]->id],
            'options' => ['class' => 'btn btn-primary']
        ]) ?>
        <?= Yii::$app->template->link([
            'title' => 'Monitoring Sheet',
            'url' => ['dots/monitoring', 'id' => $model[$x]->id],
            'options' => ['class' => 'btn btn-info']
        ]) ?>


    <?= DetailView::widget([
        'model' => $model[$x],
        'attributes' => [
            'patientName',
            'name_of_collection_unit',
            'date_of_request',
            'age',
            'telephone_number',
            'history',
            'disease',
            'reason',
            'specimen',
            'requested',
        ],
    ]) ?>


<?php    
}
?>
</div>
