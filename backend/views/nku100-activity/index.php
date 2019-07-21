<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Nku100ActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku100 Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku100 Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NKU100_activity_id',
            'NKU100_activity_name',
            'NKU100_activity_time',
            'NKU100_activity_type',
            'NKU100_activity_place',
            //'NKU100_activity_department',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
