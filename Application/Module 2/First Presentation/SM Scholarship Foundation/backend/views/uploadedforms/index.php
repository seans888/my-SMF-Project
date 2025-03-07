<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UploadedformsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploadedforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadedforms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Uploadedforms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'uploaded_scholar_id',
			[
				'attribute'=>'scholar_lastName',
				'value'=>'scholar.scholar_lastName',
			],
			[
				'attribute'=>'scholar_firstName',
				'value'=>'scholar.scholar_firstName',
			],
			[
				'attribute'=>'scholar_middleName',
				'value'=>'scholar.scholar_middleName',
			],
            'uploadedForm',
            'fileName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
