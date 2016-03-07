<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChitietxuatkhoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitietxuatkho-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'MaXuatKho') ?>

    <?= $form->field($model, 'MaHangHoa') ?>

    <?= $form->field($model, 'SoLuong') ?>

    <?= $form->field($model, 'DonGia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
