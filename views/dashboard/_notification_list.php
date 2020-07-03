<ul class="list-group clear-list m-t">

    <?php foreach ($notifications as $notif) : ?>
        <li class="list-group-item fist-item">
            <span class="pull-right">
                <?= date('F d, Y H:i A', strtotime($notif->date_time)) ?>
            </span>
            <span class="label label-<?= Yii::$app->params['label_class'][rand(0, 3)] ?>">
            	20
            </span> <?= $notif->description ?>
        </li>
    <?php endforeach; ?>
   
</ul>