<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100News */

$this->title = 'Update Nku100 News: ' . $model->NKU100_news_id;
$this->params['breadcrumbs'][] = ['label' => 'Nku100 News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NKU100_news_id, 'url' => ['view', 'id' => $model->NKU100_news_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nku100-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
