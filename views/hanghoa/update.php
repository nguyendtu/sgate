<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hanghoa */

$this->title = 'Update Hanghoa: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Hanghoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hanghoa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
