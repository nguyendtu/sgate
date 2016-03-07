<?php
namespace yii\helpers;

class YearHelper extends BaseArrayHelper{

    public static function yearsDropdown(){
        $curDate = getdate(time());
        $years = [];

        for($i = 0; $i < 10; $i++){
            $years[] = $curDate['year'] - $i;
        }

        return $years;
    }
}
?>