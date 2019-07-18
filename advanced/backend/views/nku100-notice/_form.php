<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Notice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-notice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NKU100_notice_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_notice_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
