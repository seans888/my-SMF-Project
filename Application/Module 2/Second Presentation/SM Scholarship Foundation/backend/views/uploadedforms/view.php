<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uploadedforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadedforms-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('View List', ['index', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Download', ['download','id' => $model->id], ['class' => 'btn btn-alert']) ?>
        <?= Html::a('Check', ['check', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Send for Approval', ['send', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to send this for approval?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'scholar.scholar_lastName',
            'scholar.scholar_firstName',
            'scholar.scholar_middleName',
            'uploadedForm',
            'uploaded_scholar_id',
            'fileName',
			'uploaded_by',
			'updated_by',
			'checked_by',
			'checked_remark',
        ],
    ]) ?>

</div>
