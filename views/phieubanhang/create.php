<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Phieubanhang */

$this->title = 'Create Phieubanhang';
$this->params['breadcrumbs'][] = ['label' => 'Phieubanhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phieubanhang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
