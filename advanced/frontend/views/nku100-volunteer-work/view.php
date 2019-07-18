<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100VolunteerWork */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Volunteer Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nku100-volunteer-work-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'NKU100_volunteerwork_name',
            'NKU100_volunteerwork_number',
            'NKU100_volunteerwork_task',
            'NKU100_volunteerwork_department',
        ],
    ]) ?>

</div>
