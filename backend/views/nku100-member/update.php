<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Member */

$this->title = 'Update Nku100 Member: ' . $model->NKU100_member_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NKU100_member_id, 'url' => ['view', 'id' => $model->NKU100_member_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-member-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
