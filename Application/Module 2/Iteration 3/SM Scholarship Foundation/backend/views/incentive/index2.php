<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use common\models\School;
use common\models\Scholar;
/* @var $this yii\web\View */
/* @var $searchModel common\models\IncentiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incentives';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php // echo $this->render('_search', ['model' => $searchModel]);
$exportedValues =
	[
		['class' => 'yii\grid\SerialColumn'],
		[
			'attribute'=>'scholar_scholar_id',
		],
		// [
		// 'class' => 'kartik\grid\EditableColumn',
		// 'attribute'=>'scholar_scholar_id',
		// 'editableOptions' => [
			// 'inputType' => '\kartik\select2\Select2',
			// 'options'=>
			// [
				// 'data' => ArrayHelper::map(Scholar::find()->all(),'scholar_id','scholar_last_name','scholar_id'),
			// ],
		// ],
	// ],
		[
			'attribute' => 'firstName',
			'value' => 'scholarScholar.scholar_first_name'
		],
		[
			'attribute' => 'middleName',
			'value' => 'scholarScholar.scholar_middle_name'
		],
		[
			'attribute' => 'lastName',
			'value' => 'scholarScholar.scholar_last_name'
		],
		[
			'attribute' => 'scholar_school_school_id',
			'value' => 'schoolSchool.school_name'
		],
		// [
		// 'class' => 'kartik\grid\EditableColumn',
		// 'attribute'=>'scholar_school_school_id',
		// 'editableOptions' => [
			// 'inputType' => '\kartik\select2\Select2',
			// 'options'=>
			// [
				// 'data' => ArrayHelper::map(School::find()->all(),'school_id','school_name'),
			// ],
		// ],
		// 'value'=>'schoolSchool.school_name',
		// ],
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'incentive_amount',
		],
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'incentive_remark',
		],
		[
				'class' => 'kartik\grid\EditableColumn',
            	'attribute'=>'incentive_date',
				'editableOptions' => [
					'inputType' => 'widget',
					'options'=>
					[
						'model' => $searchModel,

							'clientOptions' => [
								'autoclose' => true,
								'format' => 'yyyy-mm-dd',
							]
					],
					'widgetClass'=>'dosamigos\datepicker\DatePicker'
				],
        ],
		// [
		// 'class' => 'kartik\grid\EditableColumn',
		// 'attribute' => 'scholar_allowance_allowance_area',
		// 'editableOptions' => [
			// 'inputType' => 'dropDownList',
			// 'pluginOptions'=>['allowClear'=>true],
			// 'data' => ["NCR"=>"NCR","Provincial"=>"Provincial"],
			// 'widgetClass'=> 'kartik\select2\Select2',
		// ],
	// ],
		'scholar_allowance_allowance_area',
		['class' => 'yii\grid\ActionColumn'],
	];
	
	$export = ExportMenu::widget([
			'dataProvider' => $dataProvider,
			'columns' => $exportedValues,
			'exportConfig'=>[
			'Excel5'=>false,
			'Excel2007'=>false,
		],
			'noExportColumns' => [10],
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
				
<div class="deduction-index">
	
	<h1><?= Html::encode($this->title) ?></h1>
	<?php ?>
<?= Html::a('Group By Scholar', ['index'], ['class' => 'btn btn-success']) ?>
<?= Html::a('Show Only Incentive Records', ['index2'], ['class' => 'btn btn-success']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true,
		'pjaxSettings' => 
		[
			'neverTimeout' => true
		],
        'columns' => $exportedValues,
		'toolbar'=> [
		[
			'content'=>html::a('Create Incetives', ['create'], ['class' => 'btn btn-success'])
		],
		
		'{toggleData}',
		$export
		],
		'panel'=>
		[
			'type'=>GridView::TYPE_PRIMARY,
			'heading'=>'Incentives Table',
		]
    ]); 
	?>

</div>
