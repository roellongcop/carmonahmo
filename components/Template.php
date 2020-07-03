<?php
namespace app\components;

use Yii;
use app\models\User;
use app\models\Appointment;
use app\models\AboutSearch;
use app\models\Notification;
use app\models\DepartmentSearch;

use yii\helpers\Html;
use yii\helpers\FileHelper;
use yii\helpers\Inflector;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


/**
* 
*/
class Template extends \yii\base\Component
{
	public function getAbout($field = 'name')
	{
		return AboutSearch::one($field);
	}

	public function writeNotif($user_id, $description)
	{
		date_default_timezone_set("Asia/Manila");

		$model = new Notification();
		$model->user_id = $user_id;
		$model->description = $description;
		$model->date_time = date('Y-m-d H:i:s');
		$model->status = 0;
		$model->save();
	}


	public function isSelected($department, $model)
	{
		if ($model->department) {
			return in_array($department->id, json_decode($model->department, true));
		}
		return false;
	}


	public function departments()
	{
		return DepartmentSearch::all();
	}

	public function backupDb($tables = '*') {


		$micro_date = microtime();
		$date_array = explode(" ",$micro_date);
		$filepath = "backup/".strtolower(str_replace(' ', '', Yii::$app->user->identity->name)).date("d_m_Y_h_i_sa").'_'.$date_array[1].".sql";


		if ($tables == '*') {

			$tables = array();

			$tables = Yii::$app->db->schema->getTableNames();
		} 
		else {

			$tables = is_array($tables) ? $tables : explode(',', $tables);

		}

		$return = '';


		foreach ($tables as $table) {

			$result = Yii::$app->db->createCommand('SELECT * FROM ' . $table)->query();


			$return.= 'DROP TABLE IF EXISTS ' . $table . ';';

			$row2 = Yii::$app->db->createCommand('SHOW CREATE TABLE ' . $table)->queryOne();

			$return.= "\n\n" . $row2['Create Table'] . ";\n\n";

			foreach ($result as $row) {

				$return.= 'INSERT INTO ' . $table . ' VALUES(';

				foreach ($row as $data) {

					$data = addslashes($data);


					// Updated to preg_replace to suit PHP5.3 +

					$data = preg_replace("/\n/", "\\n", $data);

					if (isset($data)) {

						$return.= '"' . $data . '"';

					} 
					else {

						$return.= '""';

					}

					$return.= ',';

				}

				$return = substr($return, 0, strlen($return) - 1);

				$return.= ");\n";

			}

			$return.="\n\n\n";

		}

		//save file

		$handle = fopen($filepath, 'w+');

		fwrite($handle, $return);

		fclose($handle);

	}

	public function IncomingAppointment()
	{
		$appointments = Appointment::findAll([
			'notified' => 0, 
			'scheduled_date' => date('Y-m-d', strtotime(date('Y-m-d') . '-1day'))
		]);

		if ($appointments) {
			foreach ($appointments as $appointment) {

				$this->writeNotif($appointment->user_id, "Your Appointment was scheduled tommorrow. <br>Don't be late");

				$user = User::findOne($appointment->user_id);

				$appointment->authkey = $user->authkey;
				$appointment->notified = 1;
				$appointment->save();

			}
		}

	}

	public function controllerActions($res = [])
	{
		$controllers = FileHelper::findFiles(Yii::getAlias('@app/controllers'), [
			'recursive' => true
		]);

		foreach ($controllers as $key => $controller) {
			$contents = file_get_contents($controller);
			$controller_ID = Inflector::camel2id(substr(basename($controller), 0, -14));
			preg_match_all('/public function action(\w+?)\(/', $contents, $result);
			
			foreach ($result[1] as $action) {
				$action_ID = Inflector::camel2id($action);

				if($action_ID !== 's') {
					$res[$controller_ID][] = $action_ID;
				}
			}
		}
 
		return $res;
	}

	 

	public function actions($controller="", $user='')
	{ 
		$access = ($user==='') ? $this->controllerActions():$user->role->access;

		$controller = ($controller === "") ? Yii::$app->controller->id : $controller;

		return isset($access[$controller]) ? $access[$controller]: [''];
	}
 	

 	public function behaviors($actions=[''], $verb_actions="")
 	{

 		return [
 			'access' => $this->_access($actions),
            'verbs' => $this->verbs($verb_actions)
        ];
 	}

 	public function verbs($verb_actions="")
 	{
 		$actions = $verb_actions === "" ? ['delete' => ['POST']] : $verb_actions;

 		return [
            'class' => VerbFilter::className(),
            'actions' => $actions,
        ];
 	}

 	public function _access($actions=[''])
 	{
 		$user = Yii::$app->user->isGuest ? '' : Yii::$app->user->identity;
 		return [
			'class' => AccessControl::className(),
			'only' => $this->actions(),
            'rules' => [
                [
                    'actions' => $this->actions('', $user),
                    'allow' => true,
                    'roles' => ['@'],
				],
				[
                    'actions' => $actions,
                    'allow' => true,
                    'roles' => ['?'],
				],
            ],
		];
 	}

 	public function user_can($action='', $controller='')
 	{
		$action = ($action === '') ? Yii::$app->controller->action->id : $action;
		$controller = ($controller === '') ? Yii::$app->controller->id : $controller;

		$access = Yii::$app->user->identity->role->access;


		if (isset($access[$controller])) {
			return in_array($action, $access[$controller]);
		}

		return FALSE;

 	}


 	public function button($names=[], $model='', $controller='', $params=[])
 	{
 		$controller = ($controller==='') ? Yii::$app->controller->id: $controller;
 		$names = is_array($names) ? $names: [$names];


 		$buttons = [];
 		foreach ($names as $name) {

 			$title = isset($params['title']) ? $params['title'] : ucwords($name);

 			switch ($name) {
 				case 'index':
 					$title = isset($params['title']) ? $params['title'] : 'List';
 					$options = isset($params['options']) ? $params['options'] : ['class' => 'btn btn-white'];
	 				$buttons[] = $this->link([
		 				'title' => $title,
		 				'url' => [$controller . '/' . $name],
		 				'options' => $options
		 			]);
	 				break;

	 			case 'create':
 					$options = isset($params['options']) ? $params['options'] : ['class' => 'btn btn-primary'];
	 				$buttons[] = $this->link([
		 				'title' => $title,
		 				'url' => [$controller . '/' . $name],
		 				'options' => $options
		 			]);
	 				break;

				case 'update':
 					$options = isset($params['options']) ? $params['options'] : ['class' => 'btn btn-success'];
	 				$buttons[] = $this->link([
		 				'title' => $title,
		 				'url' => [$controller . '/' . $name, 'id' => $model->id],
		 				'options' => $options
		 			]);
	 				break;

				case 'delete':
 					$options = isset($params['options']) ? $params['options'] : [
 						'class' => 'btn btn-danger',
 						'data' => [
			                'confirm' => 'Are you sure you want to delete this item?',
			                'method' => 'post',
			            ]
 					];
	 				$buttons[] = $this->link([
		 				'title' => $title,
		 				'url' => [$controller . '/' . $name, 'id' => $model->id],
		 				'options' => $options
		 			]);
	 				break;
	 			
	 			default:
	 				# code...
	 				break;
	 		}
 		}

 		return implode(' ', $buttons);
 	}


 	public function link($params)
 	{

 		$url = $params['url'][0];
 		$controller = explode('/', $url)[0];
 		$action = explode('/', $url)[1];
 		$options = isset($params['options']) ? $params['options']: NULL;


 		if ($this->user_can($action, $controller)) {
 			return \yii\helpers\Html::a($params['title'], $params['url'], $options);
 		}

 	}


}