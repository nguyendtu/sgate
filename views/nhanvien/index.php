<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NhanvienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhanviens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhanvien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nhanvien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'TenNhanVien',
            'NgaySinh',
            'Email:email',
            'CMND',
            // 'DiaChiThuongTru',
            // 'DiaChiTamTru',
            // 'DienThoai',
            // 'HinhDaiDien',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
