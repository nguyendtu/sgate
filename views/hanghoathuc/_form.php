<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hanghoathuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hanghoathuc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenMatHang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaLoaiHangHoa')->textInput() ?>

    <?= $form->field($model, 'DonVi')->textInput() ?>

    <?= $form->field($model, 'SoLuong')->textInput() ?>

    <?= $form->field($model, 'GiaMua')->textInput() ?>

    <?= $form->field($model, 'GiaBan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
