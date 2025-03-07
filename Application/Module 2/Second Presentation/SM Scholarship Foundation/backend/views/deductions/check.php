<?php
use dosamigos\datepicker\DatePicker;
use common\models\Scholars;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Refunds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refunds-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	
	<?= $form->field($model, 'deduction_scholar_id')->textInput(['readonly'=>true]) ?>
	
    <?= $form->field($model, 'deduction_date')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'deduction_amount')->textInput(['readonly'=>true])?>

    <?= $form->field($model, 'deduction_remark')->textInput(['readonly'=>true])?>
	
    <?= $form->field($model, 'checked_by')->checkBox(['label'=> 'Checked By '.Yii::$app->user->identity->username])?>
	
	<?= $form->field($model, 'checked_remark')->textInput()?>
	
    <div class="form-group">
        <?= Html::submitButton('Update', ['check', 'id' => $model->deduction_id], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
