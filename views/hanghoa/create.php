<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hanghoa */

$this->title = 'Create Hanghoa';
$this->params['breadcrumbs'][] = ['label' => 'Hàng hóa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hanghoa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
