<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
		'reportico' => 
		[
				'class' => 'reportico\reportico\Module' ,
				'controllerMap' => 
				[
								'reportico' => 'reportico\reportico\controllers\ReporticoController',
								'mode' => 'reportico\reportico\controllers\ModeController',
								'ajax' => 'reportico\reportico\controllers\AjaxController',
				]
		],
		 'gridview' =>  [
			'class' => '\kartik\grid\Module',
		],
	],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\Admin',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
			'defaultRoles' => ['guest'],
		],
 		
    ],
    'params' => $params,
];
