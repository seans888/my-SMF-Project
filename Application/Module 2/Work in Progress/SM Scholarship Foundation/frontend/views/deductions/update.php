<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Deductions */

$this->title = 'Update Deductions: ' . ' ' . $model->deduction_id;
$this->params['breadcrumbs'][] = ['label' => 'Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deduction_id, 'url' => ['view', 'id' => $model->deduction_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deductions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
