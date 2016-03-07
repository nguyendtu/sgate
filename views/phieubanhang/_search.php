<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhieubanhangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phieubanhang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'NgayBanHang') ?>

    <?= $form->field($model, 'NhanVienBanHang') ?>

    <?= $form->field($model, 'MaKhachHang') ?>

    <?= $form->field($model, 'SoHoaDon') ?>

    <?php // echo $form->field($model, 'TongTienHang') ?>

    <?php // echo $form->field($model, 'ThueVAT') ?>

    <?php // echo $form->field($model, 'TongTienTT') ?>

    <?php // echo $form->field($model, 'CongNo') ?>

    <?php // echo $form->field($model, 'GhiChu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
