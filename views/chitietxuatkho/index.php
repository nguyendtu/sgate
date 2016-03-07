<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChitietxuatkhoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chitietxuatkhos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitietxuatkho-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Chitietxuatkho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'MaXuatKho',
            'MaHangHoa',
            'SoLuong',
            'DonGia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
