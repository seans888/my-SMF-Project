<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tuitions */

$this->title = 'Update Tuitions: ' . ' ' . $model->tuition_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tuition_id, 'url' => ['view', 'id' => $model->tuition_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuitions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
