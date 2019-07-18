<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100VolunteerWork */

$this->title = 'Update Nku100 Volunteer Work: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Volunteer Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-volunteer-work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
