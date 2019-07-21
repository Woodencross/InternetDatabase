<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NKU100_news_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_news_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
