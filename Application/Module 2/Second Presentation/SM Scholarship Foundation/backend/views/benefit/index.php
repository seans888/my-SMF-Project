<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use common\models\BenefitSearch;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ScholarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Benefits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholars-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Input Benefits', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>
	<p><b><font color=orange>Orange</font> rows are scholars from NCR Areas</p>
	<p><font color=blue>Blue</font> rows are scholars from Provincial Areas</b>
	</p>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    	'rowOptions'=>function($model){
    		if($model->scholar_school_area=='Provincial')
    		{
    			return['class'=>'alert-info'];
    		}
    		else if($model->scholar_school_area=='NCR')
    		{
    			return['class'=>'alert-warning'];
    		}
    	},
        'columns' => [
            [
				'class' => 'kartik\grid\ExpandRowColumn',
				'value' => function($model, $key, $index, $column){
					return GridView::ROW_COLLAPSED;
				},
				'detail' => function ($model, $key, $index, $column){
					$searchModel = new BenefitSearch();
					$searchModel -> benefit_scholar_id = $model->scholar_id;
					$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
					
					return Yii::$app->controller->renderPartial('_benefitsrecords',[
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
