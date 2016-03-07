<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hanghoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hanghoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenMatHang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaLoaiHangHoa')->textInput() ?>

    <?= $form->field($model, 'DonVi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TonKhoDauKy')->textInput() ?>

    <?= $form->field($model, 'TonKhoHienTai')->textInput() ?>

    <?= $form->field($model, 'NamTaiChinh')->dropdownList(
        \app\models\Hanghoa::yearsDropdown()
    ) ?>

    <?= $form->field($model, 'GhiChu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
