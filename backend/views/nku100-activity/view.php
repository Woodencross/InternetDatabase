<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Activity */

$this->title = $model->NKU100_activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nku100-activity-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->NKU100_activity_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->NKU100_activity_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'NKU100_activity_id',
            'NKU100_activity_name',
            'NKU100_activity_time',
            'NKU100_activity_type',
            'NKU100_activity_place',
            'NKU100_activity_department',
        ],
    ]) ?>

</div>
