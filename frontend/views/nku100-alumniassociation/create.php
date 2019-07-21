<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100Alumniassociation */

$this->title = 'Create Nku100 Alumniassociation';
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Alumniassociations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-alumniassociation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
