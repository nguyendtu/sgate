<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nhacungcap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhacungcap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NguoiDaiDien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TenCongTy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaSoThue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DiaChi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DienThoai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NoHienTai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
