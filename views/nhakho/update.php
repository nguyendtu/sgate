<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nhapkho */

$this->title = 'Update Nhapkho: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Nhapkhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nhapkho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
