<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Loaihanghoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loaihanghoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenLoaiHangHoa')->textInput() ?>

    <?= $form->field($model, 'GhiChu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
