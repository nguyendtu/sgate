<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HanghoaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hanghoa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'TenMatHang') ?>

    <?= $form->field($model, 'MaLoaiHangHoa') ?>

    <?= $form->field($model, 'DonVi') ?>

    <?= $form->field($model, 'TonKhoDauKy') ?>

    <?php // echo $form->field($model, 'TonKhoHienTai') ?>

    <?php // echo $form->field($model, 'NamTaiChinh') ?>

    <?php // echo $form->field($model, 'GhiChu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
