<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Viewspots */

$this->title = 'Create Nku100 Viewspots';
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Viewspots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-viewspots-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
