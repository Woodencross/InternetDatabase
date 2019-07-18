<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Nku100NoticeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku100 Notices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-notice-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku100 Notice', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NKU100_notice_id',
            'NKU100_notice_name',
            'NKU100_notice_url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
