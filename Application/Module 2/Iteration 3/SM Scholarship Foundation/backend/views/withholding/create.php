<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Withholding */

$this->title = 'Create Withholding';
$this->params['breadcrumbs'][] = ['label' => 'Withholdings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="withholding-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
