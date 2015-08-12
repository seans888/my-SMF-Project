<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use common\models\GradesSearch;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ScholarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholars-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Input Grades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>
	<p><b><font color=#e7bd58>Orange</font> rows are schools from NCR Areas</p>
	<p><font color=#988db2>Purple</font> rows are schools from Provincial Areas</b>
	</p>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax'=>true,
    	'rowOptions'=>function($model){
    		if(strcasecmp($model->scholar_school_area, 'NCR') != 0)
    		{
    			return['class'=>'provincial-row'];
    		}
    		else if(strcasecmp($model->scholar_school_area, 'NCR') == 0)
    		{
    			return['class'=>'ncr-row'];
    		}
    	},
        'columns' => [
            [
				'class' => 'kartik\grid\ExpandRowColumn',
				'value' => function($model, $key, $index, $column){
					return GridView::ROW_COLLAPSED;
				},
				'detail' => function ($model, $key, $index, $column){
					$searchModel = new GradesSearch();
					$searchModel -> grade_scholar_id = $model->scholar_id;
					$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
					
					return Yii::$app->controller->renderPartial('_graderecords',[
						'searchModel' => $searchModel,
						'dataProvider' => $dataProvider,
					]);
				},
			],

            'scholar_id',
            'scholar_firstName',
            'scholar_lastName',
            'scholar_middleName',
            // 'scholar_gender',
            // 'scholar_address',
            [
            	'attribute'=>'scholar_school_id',
            	'value'=>'scholarSchool.school_name',
            ],
            'scholar_course',
            'scholar_yearLevel',
            // 'scholar_email:email',
            // 'scholar_contactNum',
            // 'scholar_cashCardNum',
         // 'scholar_school_area',
        ],
    ]); ?>

</div>
