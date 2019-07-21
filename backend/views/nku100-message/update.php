<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Message */

$this->title = 'Update Nku100 Message: ' . $model->NKU100_message_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NKU100_message_id, 'url' => ['view', 'id' => $model->NKU100_message_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
