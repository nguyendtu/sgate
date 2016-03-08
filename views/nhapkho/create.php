<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nhapkho */

$this->title = 'Create Nhapkho';
$this->params['breadcrumbs'][] = ['label' => 'Nhapkhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhapkho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelChiTietNhapKho' => $modelChiTietNhapKho,
    ]) ?>

</div>
