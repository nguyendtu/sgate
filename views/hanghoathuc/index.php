<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HanghoathucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hàng hóa thực';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hanghoathuc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    </p>
    <p>
        <?php Pjax::begin() ?>
        <?= Html::a('Create Hanghoathuc', ['create'], ['class' => 'btn btn-success']) ?>

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
            'SoLuong',
            'GiaMua',
            'GiaBan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php $js = <<<JS
    $('#model').val('hanghoathuc');
JS;
$this->registerJs($js);
?>