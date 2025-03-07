<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Scholars;
use kartik\select2\Select2;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Refunds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refunds-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($model,'refund_scholar_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id','scholar_lastName'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select Scholar ID'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>
	
    <?= $form->field($model, 'refund_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refund_smShare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refund_scholarShare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refund_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refund_date')->widget(
			DatePicker::className(), [
				// inline too, not bad
				 'inline' => false, 
				 // modify template for custom rendering
			//	'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
				'clientOptions' => [
					'autoclose' => true,
					'format' => 'yyyy-mm-dd'
				]
			]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
