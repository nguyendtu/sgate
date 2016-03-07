<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhieubanhangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phieubanhangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phieubanhang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phieubanhang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'NgayBanHang',
            'NhanVienBanHang',
            'MaKhachHang',
            'SoHoaDon',
            // 'TongTienHang',
            // 'ThueVAT',
            // 'TongTienTT',
            // 'CongNo',
            // 'GhiChu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
