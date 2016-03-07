<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chitietxuatkho */

$this->title = 'Create Chitietxuatkho';
$this->params['breadcrumbs'][] = ['label' => 'Chitietxuatkhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitietxuatkho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
