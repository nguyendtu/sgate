<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Loaihanghoa */

$this->title = 'Create Loaihanghoa';
$this->params['breadcrumbs'][] = ['label' => 'Loaihanghoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaihanghoa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
