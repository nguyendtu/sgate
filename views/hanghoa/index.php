<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HanghoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hàng hóa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hanghoa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?php Pjax::begin() ?>
        <?= Html::a('Create Hanghoa', ['create'], ['class' => 'btn btn-success']) ?>

        <?= $this->render('@app/views/excel/_form') ?>

        <?php Pjax::end() ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            'TenMatHang',
            'MaLoaiHangHoa',
            'DonVi',
            'TonKhoDauKy',
            'TonKhoHienTai',
            'NamTaiChinh',
            'GhiChu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php $js = <<<JS
    $('#model').val('hanghoa');
JS;
$this->registerJs($js);
 ?>