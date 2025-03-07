<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\College */

$this->title = 'Create College';
$this->params['breadcrumbs'][] = ['label' => 'College Plan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="college-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
