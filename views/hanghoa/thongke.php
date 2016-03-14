<?php
/**
 * Created by PhpStorm.
 * User: @TuNguyen: duytu.nguyen@outlook.com
 * Date: 3/14/2016
 * Time: 9:26 AM
 */

use yii\grid\GridView;
?>

<div class="hanghoa-thongke">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            // 'TenMatHang',
            // 'MaLoaiHangHoa',
            'DonVi',
            'TonKhoDauKy',
            'TonKhoHienTai',
            [
                'label' => 'Thống Kê',
                //'value' => 'chitietnhapkhos.SoLuong',
                'value' => function ($model, $key, $index, $grid){
                    // tong luong hang nhap
                    // get chi tiet nhap kho
                    $chiTietNhap = $model->chitietnhapkhos;
                    $tongNhap = 0;
                    if(!empty($chiTietNhap)){
                        foreach($chiTietNhap as $item){
                            $tongNhap += $item->SoLuong;
                        }
                    }
                    // tong luong hang xuat
                    // get chi tiet xuat kho
                    $chiTietXuat = $model->chitietxuatkhos;
                    $tongXuat = 0;
                    if(!empty($chiTietXuat)){
                        foreach($chiTietXuat as $item){
                            $tongXuat += $item->SoLuong;
                        }
                    }
                    // ket qua

                    return $model->TonKhoDauKy + $tongNhap - $tongXuat;
                }
            ],
            // 'NamTaiChinh',
            // 'GhiChu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
