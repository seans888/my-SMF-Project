<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FileserverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fileservers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fileserver-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fileserver', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'f138',
            'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
