<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100News */

$this->title = 'Create Nku100 News';
$this->params['breadcrumbs'][] = ['label' => 'Nku100 News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
