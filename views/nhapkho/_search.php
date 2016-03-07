<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NhapkhoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhapkho-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'NgayNhap') ?>

    <?= $form->field($model, 'NhanVienMuaHang') ?>

    <?= $form->field($model, 'SoHoaDon') ?>

    <?= $form->field($model, 'MaNhaCungCap') ?>

    <?php // echo $form->field($model, 'TongTienHang') ?>

    <?php // echo $form->field($model, 'ThueVAT') ?>

    <?php // echo $form->field($model, 'TongTienTT') ?>

    <?php // echo $form->field($model, 'GhiChu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
