<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Phieubanhang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phieubanhang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NgayBanHang')->textInput() ?>

    <?= $form->field($model, 'NhanVienBanHang')->textInput() ?>

    <?= $form->field($model, 'MaKhachHang')->textInput() ?>

    <?= $form->field($model, 'SoHoaDon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TongTienHang')->textInput() ?>

    <?= $form->field($model, 'ThueVAT')->textInput() ?>

    <?= $form->field($model, 'TongTienTT')->textInput() ?>

    <?= $form->field($model, 'CongNo')->textInput() ?>

    <?= $form->field($model, 'GhiChu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
