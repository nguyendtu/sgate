<?php

use yii\widgets\Pjax;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <a href="/hanghoa/thongke" class="btn btn-primary">Thống kê</a>
    <a href="/hanghoathuc/thongke" class="btn btn-primary">Thống kê hàng hóa thực</a>

    <?php
        $date = getdate();
        if($date['mday'] == 1 && $date['mon'] == 1){
    ?>
            <a href="hanghoa/kethang" class="btn btn-primary">Kết chuyển hàng tồn kho</a>
    <?php
        }
    ?>

</div>
