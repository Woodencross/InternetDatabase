<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100ViewspotsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-viewspots-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'NKU100_viewspots_id') ?>

    <?= $form->field($model, 'NKU100_viewspots_name') ?>

    <?= $form->field($model, 'NKU100_viewspots_content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
