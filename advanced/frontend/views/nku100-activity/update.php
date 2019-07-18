<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100Activity */

$this->title = 'Update Nku100 Activity: ' . $model->NKU100_activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NKU100_activity_id, 'url' => ['view', 'id' => $model->NKU100_activity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-activity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
