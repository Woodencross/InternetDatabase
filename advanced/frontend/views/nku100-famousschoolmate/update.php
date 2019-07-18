<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100Famousschoolmate */

$this->title = 'Update Nku100 Famousschoolmate: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Famousschoolmates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-famousschoolmate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
