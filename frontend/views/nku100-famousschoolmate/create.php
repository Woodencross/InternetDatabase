<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100Famousschoolmate */

$this->title = 'Create Nku100 Famousschoolmate';
$this->params['breadcrumbs'][] = ['label' => 'Nku100 Famousschoolmates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku100-famousschoolmate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
