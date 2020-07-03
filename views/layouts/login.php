<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\resources\LoginAsset;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/images.jpg">
    <script>var base_url = "<?= Yii::$app->urlManager->baseUrl ?>/"</script>
 
    <?php $this->head() ?>

       
</head>
<body class="gray-bg">
<?php $this->beginBody() ?>
    

    <?= $content ?>
                          

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
