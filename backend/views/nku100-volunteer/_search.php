<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100VolunteerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-volunteer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'NKU100_volunteer_id') ?>

    <?= $form->field($model, 'NKU100_volunteer_name') ?>

    <?= $form->field($model, 'NKU100_volunteer_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
