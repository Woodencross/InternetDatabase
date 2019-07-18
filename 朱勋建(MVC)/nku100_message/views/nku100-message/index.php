<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Nku100MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku100 Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku100 Message', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NKU100_message_id',
            'NKU100_message_contend',
            'NKU100_message_data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
