<?php
/**
 * Created by PhpStorm.
 * User: @TuNguyen: duytu.nguyen@outlook.com
 * Date: 3/14/2016
 * Time: 10:09 AM
 */
use yii\grid\GridView;
?>

<div class="hanghoathuc-thongke">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model, $key, $index, $grid){
            $config = \app\models\Config::find()->where(['name' => 'soluong'])->one();
            if($model->SoLuong < $config->value){
                return ['class' => 'danger'];
            }

            return ['class' => ''];
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            'TenMatHang',
            [
                'attribute' => 'MaLoaiHangHoa',
                'value' => 'loaihanghoa.TenLoaiHangHoa',
            ],
            'DonVi',
            'SoLuong',
            'GiaMua',
            'GiaBan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <a href="/excel/export" class="btn btn-success">Xuất excel</a>
</div>
