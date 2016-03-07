<?php
/**
 * Created by PhpStorm.
 * User: @TuNguyen: duytu.nguyen@outlook.com
 * Date: 3/6/2016
 * Time: 4:59 PM
 */

use yii\bootstrap\ActiveForm;

?>

<div class="excel-form-import">
    <?php ActiveForm::begin([
        'layout' => 'inline',
        'action' => '/excel/import',
        'method' => 'post',

    ]) ?>

    <input type="text" name="model" id="model" value="" class="sr-only">

    <div class="form-group">
        <label class="label-control sr-only" for="exampleInputFile">File excel</label>
        <input type="file" name="filePath" id="filePath" class="form-control" accept=".xlsx">
    </div>

    <button class="btn btn-success">Import Excel</button>

    <?php ActiveForm::end() ?>
</div>
