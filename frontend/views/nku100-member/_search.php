<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100MemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'NKU100_member_id') ?>

    <?= $form->field($model, 'NKU100_member_name') ?>

    <?= $form->field($model, 'NKU100_member_sex') ?>

    <?= $form->field($model, 'NKU100_member_college') ?>

    <?= $form->field($model, 'NKU100_member_hometown') ?>

    <?php // echo $form->field($model, 'NKU100_member_sign') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
