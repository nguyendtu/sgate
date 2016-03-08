<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use himiklab\handsontable\HandsontableWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Nhapkho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhapkho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NgayNhap')->textInput() ?>

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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div class="chitietnhapkho-container">
    <h1><?= Html::encode('Chi tiết nhập kho') ?></h1>
    <?= HandsontableWidget::widget([
        'settings' => [
            'colHeaders' => [
                'Mã Hàng Hóa',
                'Số Lượng',
                'Đơn Giá'
            ],
            'data' => [
                ['A1', 'B1', 'C1'],
                ['A2', 'B2', 'C2'],
            ],
            'rowHeaders' => true,
            'columns' => [
                [
                    'data' => 'MaHangHoa',
                    'type' => 'numeric',
                    'allowInvalid' => false
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
            ]
        ],
    ]) ?>
</div>
