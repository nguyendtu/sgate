<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Phieumuahang */

$this->title = 'Create Phieumuahang';
$this->params['breadcrumbs'][] = ['label' => 'Phieumuahangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phieumuahang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
