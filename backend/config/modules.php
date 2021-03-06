<?php

use common\enums\rbac\PermissionEnum;
use yii2lab\helpers\Behavior;

return [
	'user' => [
		'class' => 'yii2module\account\module\Module',
		'controllerMap' => [
			'auth' => [
				'class' => 'yii2module\account\module\controllers\AuthController',
				'layout' => '@yii2lab/applicationTemplate/backend/views/layouts/singleForm.php',
			],
		],
	],
	'dashboard' => [
		'class' => 'yii2module\dashboard\admin\Module',
		'log' => [
			'Frontend' => '@frontend/runtime/logs/app.log',
			'Backend' => '@backend/runtime/logs/app.log',
			'Console' => '@console/runtime/logs/app.log',
			'Api' => '@api/runtime/logs/app.log',
		],
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
	'cleaner' => [
		'class' => 'yii2module\cleaner\admin\Module',
		'as access' => Behavior::access(PermissionEnum::CLEANER_MANAGE),
	],

	'offline' => [
		'class' => 'yii2module\offline\admin\Module',
		'as access' => Behavior::access(PermissionEnum::OFFLINE_MANAGE),
	],
	'document' => [
		'class' => 'backend\modules\document\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
	'operation' => [
		'class' => 'backend\modules\operation\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
    'organization' => [
        'class' => 'backend\modules\organization\Module',
        'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
    ],
	'process' => [
		'class' => 'backend\modules\process\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
	'reports' => [
		'class' => 'backend\modules\reports\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
];
