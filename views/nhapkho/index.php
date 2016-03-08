<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NhapkhoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhapkhos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhapkho-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nhapkho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            'NgayNhap',
            // 'NhanVienMuaHang',
            [
                'attribute' => 'NhanVienMuaHang',
                'value' => 'nhanvien.TenNhanVien'
            ],
            'SoHoaDon',
            // 'MaNhaCungCap',
            [
                'attribute' => 'MaNhaCungCap',
                'label' => 'Nhà Cung Cấp',
                'value' => 'nhacungcap.TenCongTy'
            ],
            'TongTienHang',
            'ThueVAT',
            'TongTienTT',
            'GhiChu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
