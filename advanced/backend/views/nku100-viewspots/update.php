<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Viewspots */

$this->title = 'Update Nku100 Viewspots: ' . $model->NKU100_viewspots_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Viewspots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NKU100_viewspots_id, 'url' => ['view', 'id' => $model->NKU100_viewspots_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-viewspots-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
