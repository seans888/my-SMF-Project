<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Schools */

$this->title = $model->school_id;
$this->params['breadcrumbs'][] = ['label' => 'Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schools-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->school_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->school_id], [
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
            'school_id',
            'school_name',
            'school_email:email',
            'school_address',
        ],
    ]) ?>

</div>
