<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use common\models\School;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ScholarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scholars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scholar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php
$exportedValues = 
[            
	['class' => 'kartik\grid\SerialColumn'],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_id',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_first_name',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_middle_name',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_last_name',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_gender',
		'editableOptions' => [
			'inputType' => 'dropDownList',
			'pluginOptions'=>['allowClear'=>true],
			'data' => ["Male"=>"Male","Female"=>"Female"],
			'widgetClass'=> 'kartik\select2\Select2',
		],
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_course',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'school_school_id',
		'editableOptions' => [
			'inputType' => '\kartik\select2\Select2',
			'options'=>
			[
				'data' => ArrayHelper::map(School::find()->all(),'school_id','school_name'),
			],
		],
		'value'=>'schoolSchool.school_name',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_year_level',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_graduate_status',
		'editableOptions' => [
			'inputType' => 'dropDownList',
			'pluginOptions'=>['allowClear'=>true],
			'data' => ["Not Graduated"=>"Not Graduated","Graduated"=>"Graduated"],
			'widgetClass'=> 'kartik\select2\Select2',
		],
	],
	// [
		// 'class' => 'kartik\grid\EditableColumn',
		// 'attribute' => 'scholar_vendor_code',
	// ],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'scholar_type',
		'editableOptions' => [
			'inputType' => 'dropDownList',
			'pluginOptions'=>['allowClear'=>true],
			'data' => ["SMFI"=>"SMFI","My Scholar A"=>"My Scholar A","Kabayan Scholar"=>"Kabayan Scholar",
			"Kabayan Scholar"=>"Kabayan Scholar","My Scholar B"=>"My Scholar B","ICA Grant Scholar"=>"ICA Grant Scholar"],
			'widgetClass'=> 'kartik\select2\Select2',
		],
	],

	['class' => 'kartik\grid\ActionColumn'],
];

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
	]);
?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true,
        'columns' => $exportedValues,
		'toolbar'=> [
			[
				'content'=>Html::a('Create Scholar', ['create'], ['class' => 'btn btn-success'])
			],
  //     	'{export}',
			'{toggleData}',
			$export
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
