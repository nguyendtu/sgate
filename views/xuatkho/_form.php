<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Xuatkho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="xuatkho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NgayXuat')->textInput() ?>

    <?= $form->field($model, 'SoHoaDon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NguoiBanHang')->textInput() ?>

    <?= $form->field($model, 'MaKhachHang')->textInput() ?>

    <?= $form->field($model, 'TongTienHang')->textInput() ?>

    <?= $form->field($model, 'ThueVAT')->textInput() ?>

    <?= $form->field($model, 'TongTienTT')->textInput() ?>

    <?= $form->field($model, 'GhiChu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
