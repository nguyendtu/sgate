<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NhacungcapSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhacungcap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'NguoiDaiDien') ?>

    <?= $form->field($model, 'TenCongTy') ?>

    <?= $form->field($model, 'MaSoThue') ?>

    <?= $form->field($model, 'DiaChi') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Website') ?>

    <?php // echo $form->field($model, 'DienThoai') ?>

    <?php // echo $form->field($model, 'NoHienTai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
