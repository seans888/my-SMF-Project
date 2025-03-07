<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedRefunds */

$this->title = $model->refund_id;
$this->params['breadcrumbs'][] = ['label' => 'Approved Refunds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-refunds-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->refund_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->refund_id], [
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
            'refund_id',
            'refund_amount',
            'refund_smShare',
            'refund_scholarShare',
            'refund_scholar_id',
            'refund_tuitionfee_id',
            'refund_description',
            'refund_date',
            'approval_status',
            'approved_by',
            'approved_remark',
        ],
    ]) ?>

</div>
