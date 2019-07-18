<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Volunteer */

$this->title = 'Update Nku100 Volunteer: ' . $model->NKU100_volunteer_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NKU100_volunteer_id, 'url' => ['view', 'id' => $model->NKU100_volunteer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-volunteer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
