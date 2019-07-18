<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NKU100_activity_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_activity_time')->textInput() ?>

    <?= $form->field($model, 'NKU100_activity_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_activity_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_activity_department')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
