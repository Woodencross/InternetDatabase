<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Activity */

$this->title = 'Create Nku100 Activity';
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
