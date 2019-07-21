<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100Message */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NKU100_message_contend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_message_data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
