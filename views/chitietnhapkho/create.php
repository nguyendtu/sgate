<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chitietnhapkho */

$this->title = 'Create Chitietnhapkho';
$this->params['breadcrumbs'][] = ['label' => 'Chitietnhapkhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitietnhapkho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
