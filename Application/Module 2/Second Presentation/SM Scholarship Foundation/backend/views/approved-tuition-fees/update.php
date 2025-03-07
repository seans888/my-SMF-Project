<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedTuitionFees */

$this->title = 'Update Approved Tuition Fees: ' . ' ' . $model->tuitionfee_id;
$this->params['breadcrumbs'][] = ['label' => 'Approved Tuition Fees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tuitionfee_id, 'url' => ['view', 'id' => $model->tuitionfee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="approved-tuition-fees-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
