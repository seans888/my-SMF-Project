<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */

$this->title = 'Create Uploadedforms';
$this->params['breadcrumbs'][] = ['label' => 'Uploadedforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadedforms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
