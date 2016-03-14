<?php

use himiklab\handsontable\HandsontableWidget;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Nhapkho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitietnhapkho-container">
    <h1><?= Html::encode('Chi tiết nhập kho') ?></h1>
    <?= HandsontableWidget::widget([
        'settings' => [
            'rowHeaders' => true,
            'autoWrapRow' => true,
            'colHeaders' => [
                'Mã Hàng Hóa',
                'Số Lượng',
                'Đơn Giá',
            ],
            'colWidths' => 300,
            'columns' => [
                [
                    'type' => 'dropdown',
                    'source' => \yii\helpers\ArrayHelper::getColumn(\app\models\Hanghoa::find()->all(), 'TenMatHang', 'ID'),
                ],
                [
                    'data' => 'SoLuong',
                    'type' => 'numeric',
                    'allowInvalid' => false
                ],
                [
                    'data' => 'DonGia',
                    'type' => 'numeric',
                    'allowInvalid' => false
                ],
            ],
            'afterChange' => new \yii\web\JsExpression('function(changes, source){
                if(changes){
                    console.log(this.getDataAtRow(changes[0][0]));
                    $("#chi-tiet-nhap-kho").val(this.getData());
                }
            }'),
        ],
    ]); ?>
</div>

<div class="nhapkho-form">
    <h1><?= Html::encode('Nhập Kho') ?></h1>

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal'
    ]); ?>

    <?= $form->field($model, 'NgayNhap',['options' => ['class' => 'sr-only']])->textInput([
        'value' => date('Y-m-d H:i:s', time()),
    ]) ?>

    <?= $form->field($model, 'NhanVienMuaHang')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Nhanvien::find()->all(), 'ID', 'TenNhanVien'),
        ['prompt' => '--- Chọn nhân viên ---']
    ) ?>

    <?= $form->field($model, 'SoHoaDon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaNhaCungCap')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Nhacungcap::find()->all(), 'ID', 'TenCongTy'),
        ['prompt' => '--- Chọn nhà cung cấp ---']
    ) ?>

    <?= $form->field($model, 'TongTienHang')->textInput() ?>

    <?= $form->field($model, 'ThueVAT')->textInput() ?>

    <?= $form->field($model, 'TongTienTT')->textInput() ?>

    <?= $form->field($model, 'GhiChu')->textInput(['maxlength' => true]) ?>

    <input type="text" name="chi-tiet-nhap-kho" id="chi-tiet-nhap-kho" value="">

    <div class="form-group">
        <label for="" class="label-control col-sm-3"></label>
        <div class="col-sm-9">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>