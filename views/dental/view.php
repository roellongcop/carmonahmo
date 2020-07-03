<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dental */


$this->params['page'] = 'Dental';
$this->title = ucwords($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Dental', 'url' => ['/dental']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-view ibox float-e-margins ibox-content">
    <?php foreach($model->dental as $model): ?>

        <p>
            <?= Yii::$app->template->button(['update', 'delete'], $model) ?>
        </p>
        
    
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'patientName',
                'assessmentDate',
                'complaint:ntext',
                'medical:ntext',
                'dental:ntext',
                'treatment:ntext',
                'diagnosis:ntext',  
            ],
        ]) ?>
    
        <hr>
    
        <p class="lead">ORAL HEALTH CONDITION</p>
        <table class="table table-bordered">
            <tbody>
                <?php foreach (json_decode($model->oral_condition) as $key => $oral) : ?>
                    <tr>    
                        <td><?= strtoupper($key) ?></td>
                        <td><?= ($oral[0]) ? $oral[0] : 'N/A' ?></td>
                        <td><?= ($oral[1]) ? $oral[1] : 'N/A' ?></td>
                        <td><?= ($oral[2]) ? $oral[2] : 'N/A' ?></td>
                        <td><?= ($oral[3]) ? $oral[3] : 'N/A' ?></td>
                        <td><?= ($oral[4]) ? $oral[4] : 'N/A' ?></td>
                        <td><?= ($oral[5]) ? $oral[5] : 'N/A' ?></td>
                    </tr>   
                <?php endforeach; ?>
            </tbody>
        </table>
    
        <hr>
    
        <div class="row">
            <div class="col-md-6">
                <p class="lead">DENTAL HEALTH STATUS</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>TOOTH NUMBER</th>
                            <th>TREATMENT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (json_decode($model->dental_health) as $key => $value): ?>
                            <tr>
                                <td><?= $value->tooth_number ?></td>
                                <td><?= $value->treatment ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <hr>
    <?php endforeach; ?>
    

</div>
