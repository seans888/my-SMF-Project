<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use common\models\School;
use common\models\OptionalworkSearch;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ScholarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Optional Work';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php
$exportedValues = 
[            
	[
			'class' => 'kartik\grid\ExpandRowColumn',
			'value' => function($model, $key, $index, $column){
				return GridView::ROW_COLLAPSED;
			},
			'detail' => function ($model, $key, $index, $column){
				$searchModel = new OptionalworkSearch();
				$searchModel -> scholar_scholar_id = $model->scholar_id;
				$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
				
				return Yii::$app->controller->renderPartial('_dropdown',[
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
				]);
			},
	],
	'scholar_id',
	[
		'attribute' => 'scholar_first_name',
	],
	[
		'attribute' => 'scholar_middle_name',
	],
	[
		'attribute' => 'scholar_last_name',
	],
	/*
	[
		'attribute' => 'scholar_gender',
	],
	[
		'attribute' => 'scholar_course',
	],
	[
		'attribute'=>'school_school_id',
		'value'=>'schoolSchool.school_name',
	],
	[
		'attribute' => 'scholar_year_level',
	],
	[
		'attribute' => 'scholar_graduate_status',
	],
	[
		'attribute' => 'scholar_vendor_code',
	],
	[
		'attribute' => 'scholar_type',
	],
*/
	['class' => 'kartik\grid\ActionColumn'],
];

/*
$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		'noExportColumns'=>[18],
        'columnSelectorOptions'=>[
            'label' => 'Columns',
            'class' => 'btn btn-danger'
        ],
		'target' => '_blank',
        'fontAwesome' => true,
        'dropdownOptions' => [
            'label' => 'Export',
            'class' => 'btn btn-success'
        ]
	])
*/;
?>
<?= Html::a('Group By Scholar', ['index'], ['class' => 'btn btn-success']) ?>
<?= Html::a('Show Only Optional Work Records', ['index2'], ['class' => 'btn btn-success']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    	'rowOptions'=>function($model){
    		if(strcasecmp($model->allowance_allowance_area, 'NCR') != 0)
    		{
    			return['class'=>'provincial-row'];
    		}
    		else if(strcasecmp($model->allowance_allowance_area, 'NCR') == 0)
    		{
    			return['class'=>'ncr-row'];
    		}
    	},
		'pjax' => true,
        'columns' => $exportedValues,
		'toolbar'=> [
			[
				'content'=>Html::a('Create Optional Work', ['create'], ['class' => 'btn btn-success'])
			],
  //     	'{export}',
			'{toggleData}',
			//$export
		],
 //   set export properties
    'export'=>[
        'fontAwesome'=>true,
		'label' => 'Export',
		'target' => '_blank'
    ],
		'panel'=>[
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=>'Scholar List',
    ],
    ]); 
	?>

</div>
