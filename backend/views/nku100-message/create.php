<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nku100Message */

$this->title = 'Create Nku100 Message';
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
