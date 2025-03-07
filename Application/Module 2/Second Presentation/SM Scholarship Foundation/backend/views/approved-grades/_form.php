<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedGrades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-grades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grade_schoolYear')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'grade_Term')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'grade_scholar_id')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'grade_subject')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'grade_units')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'grade_value')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'approval_status')->dropDownList([ 'Approved' => 'Approved', 'Not Approved' => 'Not Approved' ]) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approved_remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
