<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Notice */

$this->title = 'Update Nku100 Notice: ' . $model->NKU100_notice_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Notices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NKU100_notice_id, 'url' => ['view', 'id' => $model->NKU100_notice_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-notice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
