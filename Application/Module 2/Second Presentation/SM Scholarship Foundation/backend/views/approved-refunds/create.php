<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ApprovedRefunds */

$this->title = 'Create Approved Refunds';
$this->params['breadcrumbs'][] = ['label' => 'Approved Refunds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-refunds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
