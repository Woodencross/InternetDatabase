<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Nku100VolunteerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku100 Volunteers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-volunteer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku100 Volunteer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NKU100_volunteer_id',
            'NKU100_volunteer_name',
            'NKU100_volunteer_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
