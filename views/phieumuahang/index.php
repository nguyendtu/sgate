<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhieumuahangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phieumuahangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phieumuahang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phieumuahang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'NhanVienMuaHang',
            'NgayMuaHang',
            'SoHoaDon',
            'MaNhaCungCap',
            // 'TongTienHang',
            // 'ThueVAT',
            // 'TongTienTT',
            // 'CongNo',
            // 'GhiChu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
