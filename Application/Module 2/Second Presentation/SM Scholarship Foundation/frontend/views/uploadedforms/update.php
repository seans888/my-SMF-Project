<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */

$this->title = 'Update Uploadedforms';
?>
<div class="uploadedforms-update">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
