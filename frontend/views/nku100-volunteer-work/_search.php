<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100VolunteerWorkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-volunteer-work-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'NKU100_volunteerwork_name') ?>

    <?= $form->field($model, 'NKU100_volunteerwork_number') ?>

    <?= $form->field($model, 'NKU100_volunteerwork_task') ?>

    <?= $form->field($model, 'NKU100_volunteerwork_department') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
