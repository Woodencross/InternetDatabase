<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100Volunteer */

$this->title = 'Create Nku100 Volunteer';
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-volunteer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
