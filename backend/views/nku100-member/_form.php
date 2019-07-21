<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NKU100_member_id')->textInput() ?>

    <?= $form->field($model, 'NKU100_member_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_member_sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_member_college')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_member_hometown')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_member_sign')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
