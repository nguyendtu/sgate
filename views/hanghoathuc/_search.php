<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HanghoathucSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hanghoathuc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'TenMatHang') ?>

    <?= $form->field($model, 'MaLoaiHangHoa') ?>

    <?= $form->field($model, 'DonVi') ?>

    <?= $form->field($model, 'SoLuong') ?>

    <?php // echo $form->field($model, 'GiaMua') ?>

    <?php // echo $form->field($model, 'GiaBan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
