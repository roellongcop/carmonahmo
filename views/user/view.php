<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = ucwords($model->name);
$this->params['create'] = Html::a('Membership Data', ['print', 'id' => $model->id], ['class' => 'btn btn-primary']);
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['/user']]; 
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
$this->params['page'] = 'Users';

$script = <<<JS
    $(document).ready(function() {
        $('.view').on('click', function() {
            var data = {
                id: {$model->id},
                title: $('.view').data('key')
            };

            $.ajax({
                url: base_url + 'user/find-records',
                data: data,
                method: 'post',
                dataType: 'html',
                success: (response => {
                    $('#mdl-records').modal('show')
                    $('.modal-body').html(response);
                    $('.modal-title').text(data.title);
                })
            });
        });
    })
JS;
$this->registerJs($script);


?>
<div class="user-view ibox float-e-margins ibox-content">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#personal">Personal Information</a></li>
        <li><a data-toggle="tab" href="#account">Account Information</a></li>
        <!--<li><a data-toggle="tab" href="#records">Personal Records</a></li>-->
    </ul>

    <div class="tab-content">
        <div id="personal" class="tab-pane fade in active"> <br> 
            <p class="lead"> Personal Information </p>
            <?= $this->render('_detail', ['model' => $model]) ?>
        </div>

        <div id="account" class="tab-pane fade"> <br> 
            <p class="lead"> Account Information </p>
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [ 
                    'username',
                    'password',
                    'authkey',
                    'access_token',
                    '_user_type',
                    [
                        'label' => 'Status', 
                        'value' => Yii::$app->params['user_status'][$model->status]
                    ],
                ],
            ]) ?>
        </div>
        <div id="records" class="tab-pane fade"> <br> 
            <p class="lead"> Personal Records </p> 
            
            <table class="table table-bordered data">
                <thead>
                    <th>COMPLAINT</th>
                    <th>START OF PREGNANCY</th>
                    <th>END OF PREGNANCY</th> 
                </thead>
                <tbody>
                    <?php foreach($model->birthing as $birthing): ?>
                    <tr data-key="<?= Url::to(['/birthing/view/', 'id' => $birthing->id]) ?>">
                        <td><?= $birthing->chief_complaint ?></td>
                        <td><?= $birthing->start_of_pregnancy ?></td>
                        <td><?= $birthing->end_of_pregnancy ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!--<ul class="notes row">-->
                <!--<?php foreach ($records as $record) : ?>-->
                <!--    <li>-->
                <!--        <div>-->
                <!--            <small>Total : <?= $record['total'] ?></small>-->
                <!--            <h4><?= $record['title'] ?></h4>-->

                <!--            <?php if($record['last']) : ?>-->
                <!--                <p>Last Instance recorded on <?= $record['last'] ?>.</p>-->
                <!--            <?php else: ?>-->
                <!--                <p>No Records Found.</p>-->
                <!--            <?php endif; ?> -->
                <!--        </div>-->
                <!--    </li>-->
                <!--<?php endforeach; ?>-->
                
                
                
            <!--</ul>-->
        </div>
    </div>
  
</div>


<div class="modal inmodal fade" id="mdl-records" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Modal title</h4> 
            </div>
            <div class="modal-body">

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>