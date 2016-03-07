<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hanghoathuc */

$this->title = 'Create Hanghoathuc';
$this->params['breadcrumbs'][] = ['label' => 'Hanghoathucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hanghoathuc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
