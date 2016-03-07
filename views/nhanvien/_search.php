<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NhanvienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhanvien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'TenNhanVien') ?>

    <?= $form->field($model, 'NgaySinh') ?>

    <?= $form->field($model, 'Email') ?>

    <?= $form->field($model, 'CMND') ?>

    <?php // echo $form->field($model, 'DiaChiThuongTru') ?>

    <?php // echo $form->field($model, 'DiaChiTamTru') ?>

    <?php // echo $form->field($model, 'DienThoai') ?>

    <?php // echo $form->field($model, 'HinhDaiDien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
