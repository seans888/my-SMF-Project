<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Scholars */

$this->title = $model->scholar_id;
$this->params['breadcrumbs'][] = ['label' => 'Scholars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholars-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->scholar_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->scholar_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'scholar_id',
            'scholar_first_name',
            'scholar_last_name',
            'scholar_middle_initial',
            'scholar_school_id',
            'scholar_course',
            'scholar_email:email',
        ],
    ]) ?>

</div>
