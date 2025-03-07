<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApprovedUploadedformsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approved Uploadedforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-uploadedforms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Approved Uploadedforms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'uploadedForm',
            'uploaded_scholar_id',
            'fileName',
            'approval_status',
            // 'approved_by',
            // 'approved_remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
