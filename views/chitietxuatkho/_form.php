<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chitietxuatkho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitietxuatkho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MaXuatKho')->textInput() ?>

    <?= $form->field($model, 'MaHangHoa')->textInput() ?>

    <?= $form->field($model, 'SoLuong')->textInput() ?>

    <?= $form->field($model, 'DonGia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
