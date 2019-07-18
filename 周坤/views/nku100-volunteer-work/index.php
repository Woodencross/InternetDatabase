<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Nku100VolunteerWorkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku100 Volunteer Works';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-volunteer-work-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku100 Volunteer Work', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'NKU100_volunteerwork_name',
            'NKU100_volunteerwork_number',
            'NKU100_volunteerwork_task',
            'NKU100_volunteerwork_department',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
