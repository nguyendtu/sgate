<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Xuatkho */

$this->title = 'Create Xuatkho';
$this->params['breadcrumbs'][] = ['label' => 'Xuatkhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xuatkho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
