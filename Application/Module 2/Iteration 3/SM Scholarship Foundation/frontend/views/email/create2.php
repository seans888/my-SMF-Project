<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Email */

$this->title = 'Create Email';
$this->params['breadcrumbs'][] = ['label' => 'Emails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



    <?= $this->render('_form2', [
        'model2' => $model2,
    ]) ?>

