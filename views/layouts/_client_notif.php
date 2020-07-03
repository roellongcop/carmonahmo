<?php 
use yii\helpers\Html;
use app\models\NotificationSearch;
$notifications = NotificationSearch::findByUser();
?>

<li class="dropdown">
    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
        <i class="fa fa-bell"></i>  
        <?= sizeof($notifications) ? '<span class="label label-primary">' . sizeof($notifications). '</span>' : '' ?>
        
    </a>
    <ul class="dropdown-menu dropdown-alerts">
    	<?php foreach ($notifications as $notif) : ?>
        <li>
            <a href="#">
                <div>
                    <i class="<?= Yii::$app->params['icons'][rand(0, 7)] ?>"></i> 
                    <?= $notif->description ?>
                    <span class="pull-right text-muted small">
                    	<?= date('F d, Y H:i A', strtotime($notif->date_time)) ?>
                    </span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
    	<?php endforeach; ?>
        
        <li>
            <div class="text-center link-block">
                <?= Html::a('<strong>Clear Notifications</strong> <i class="fa fa-angle-right"></i>', ['dashboard/clear-notification']) ?>
            </div>
        </li>
    </ul>
</li>