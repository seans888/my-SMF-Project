<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Email */

$this->title = 'Update Email: ' . ' ' . $model->email_scholar_id;
$this->params['breadcrumbs'][] = ['label' => 'Emails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email_scholar_id, 'url' => ['view', 'id' => $model->email_scholar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="email-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
