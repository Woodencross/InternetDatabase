<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Nku100MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku100 Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-member-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku100 Member', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NKU100_member_id',
            'NKU100_member_name',
            'NKU100_member_sex',
            'NKU100_member_college',
            'NKU100_member_hometown',
            //'NKU100_member_sign',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
