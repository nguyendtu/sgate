/**
 * Created by @TuNguyen: duytu.nguyen@outlook.com on 3/11/2016.
 */

$(function(){

});


/*
<?php
    $url = \yii\helpers\Url::to(['chitietnhapkho/create']);
$js = <<<JS
function dropdownRenderer (instance, td, row, col, prop, value, cellProperties) {

    var select = document.createElement("select");
    select.className = "form-control";
    select.setAttribute("id", "chi_tiet_nhap_kho");
    select.style.border = 'none';
    for(i = 0; i < value.length; i++){
        var option = document.createElement("option");
        option.value = value[i].ID;
        option.innerHTML = value[i].TenMatHang;

        select.appendChild(option);
    }
    console.log(select);
    td.appendChild(select);

    return td;
}

Handsontable.renderers.registerRenderer('dropdownRenderer', dropdownRenderer);
var hot, row = 0;


Handsontable.Dom.addEvent(save, 'click', function() {
    // save all cell's data
    var data = [], index = 0;
    for(var i = row; i < hot.countRows(); i++){
        if(!hot.isEmptyRow(i)){
            data[index++] = hot.getDataAtRow(i);
        }
    }
    row += index;
    console.log(data);
    console.log(hot.getSettings());

    $.post('$url', {data: data}, function(result){
        $('#nhapkho-tongtienhang').val($('#nhapkho-tongtienhang').val() + result);
    });
    //console.log(hot.getData());
});

$('.handsontable th:last-child ').css('visibility', 'hidden');

var arrID = [];
JS;
$this->registerJs($js);
?>
*/
