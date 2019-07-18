<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Nku100ViewspotsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku100 Viewspots';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-viewspots-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku100 Viewspots', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NKU100_viewspots_id',
            'NKU100_viewspots_name',
            'NKU100_viewspots_content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
