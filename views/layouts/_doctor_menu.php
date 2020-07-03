<?php 
use yii\helpers\Html;
// $departments = Yii::$app->template->departments();
$this->params['second'] = isset($this->params['second']) ? $this->params['second'] : '';

$this->params['page'] = isset($this->params['page']) ? $this->params['page']: '';


$menus = Yii::$app->params['menu'];

?>

<?php foreach ($menus as $menu) : ?>
	<?php if(Yii::$app->template->user_can('index', explode('/', $menu['url'][0])[0])): ?>

	    <li class="<?= (Yii::$app->controller->id == explode('/', $menu['url'][0])[0]) ? 'active' : '' ?>">
		    <?= Html::a('<i class="'. $menu['icon'].'"></i> <span class="nav-label">'. $menu['label'].'</span>',$menu['url']) ?>
		</li>
	<?php endif; ?>
<?php endforeach ?>
