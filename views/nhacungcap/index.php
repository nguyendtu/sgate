<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NhacungcapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhacungcaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhacungcap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nhacungcap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'NguoiDaiDien',
            'TenCongTy',
            'MaSoThue',
            'DiaChi',
            // 'Email:email',
            // 'Website',
            // 'DienThoai',
            // 'NoHienTai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
