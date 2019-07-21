<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100VolunteerWork */

$this->title = 'Create Nku100 Volunteer Work';
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Volunteer Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-volunteer-work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
