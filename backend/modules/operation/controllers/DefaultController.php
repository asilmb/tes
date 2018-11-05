<?php

namespace backend\modules\operation\controllers;

use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller {

	public $serviceName = 'finance.operation';
	public $formClass = 'backend\modules\operation\PostForm';
	public $service = 'finance.operation';

	public function actions() {
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
		$actions['view']['render'] = 'view';
		return $actions;
	}
	
}
