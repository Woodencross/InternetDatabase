<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100ActivitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-activity-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'NKU100_activity_id') ?>

    <?= $form->field($model, 'NKU100_activity_name') ?>

    <?= $form->field($model, 'NKU100_activity_time') ?>

    <?= $form->field($model, 'NKU100_activity_type') ?>

    <?= $form->field($model, 'NKU100_activity_place') ?>

    <?php // echo $form->field($model, 'NKU100_activity_department') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
