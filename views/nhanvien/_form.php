<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nhanvien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhanvien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenNhanVien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NgaySinh')->textInput() ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CMND')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DiaChiThuongTru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DiaChiTamTru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DienThoai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HinhDaiDien')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
