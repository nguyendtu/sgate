<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nhapkho */

$this->title = 'Kho ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Nhapkhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhapkho-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'NgayNhap',
            [
                'attribute' => 'NhanVienMuaHang',
                'value' => $model->nhanvien->TenNhanVien,
            ],
            'SoHoaDon',
            [
                'attribute' => 'MaNhaCungCap',
                'value' => $model->nhacungcap->TenCongTy,
            ],
            'TongTienHang',
            'ThueVAT',
            'TongTienTT',
            'GhiChu',
        ],
    ]) ?>

    <h1>Chi tiết kho</h1>
    <?= \yii\grid\GridView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider([
            'query' => $model->getChitietnhapkhos(),
        ]),
        'columns' => [
            [
                'class' => \yii\grid\SerialColumn::className()
            ],
            // 'ID',
            'MaNhapKho',
            'MaHangHoa',
            'SoLuong',
            'DonGia',
            [
                'class' => \yii\grid\ActionColumn::className(),
                'controller' => 'chitietnhapkho',
            ],
        ]
    ]) ?>
</div>