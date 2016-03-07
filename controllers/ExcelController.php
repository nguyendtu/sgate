<?php
/**
 * Created by PhpStorm.
 * User: @TuNguyen: duytu.nguyen@outlook.com
 * Date: 3/6/2016
 * Time: 4:04 PM
 */

namespace app\controllers;

use app\models\Hanghoa;
use app\models\Hanghoathuc;
use yii\web\Controller;

class ExcelController extends Controller{

    public function actionImport(){

        $filePath = \Yii::$app->request->post('filePath');
        $model = \Yii::$app->request->post('model');

        if(isset($filePath)) {
            $data = \moonland\phpexcel\Excel::import('C:\Users\DUYTU\Desktop\tmp\\' . $filePath, [
                'setFirstRecordAsKeys' => true, // if you want to set the keys of record column with first record, if it not set, the header with use the alphabet column on excel.
                'setIndexSheetByName' => true, // set this if your excel data with multiple worksheet, the index of array will be set with the sheet name. If this not set, the index will use numeric.
                'getOnlySheet' => 'sheet1', // you can set this property if you want to get the specified sheet from the excel data with multiple worksheet.
            ]);

            if($model == 'hanghoa'){
                foreach($data as $item){
                    $newModel = new Hanghoa();

                    /**------------- set data ----------------*/
                    $newModel->TenMatHang       = $item['Tên Mặt Hàng'];
                    $newModel->MaLoaiHangHoa    = $item['Mã Loại Hàng Hóa'];
                    $newModel->DonVi            = $item['Đơn Vị'];
                    $newModel->TonKhoDauKy      = $item['Tồn Kho Đầu Kỳ'];
                    $newModel->TonKhoHienTai    = $item['Tồn Kho Hiện Tại'];
                    $newModel->NamTaiChinh      = $item['Năm Tài Chính'];
                    $newModel->GhiChu           = $item['Ghi Chú'];
                    /**------------- end set data -------------*/

                    $newModel->save();

                }

                return $this->redirect([ $model .'/index']);
            }else{
                foreach($data as $item){
                    $newModel = new Hanghoathuc();

                    /**------------- set data ----------------*/
                    $newModel->TenMatHang       = $item['Tên Mặt Hàng'];
                    $newModel->MaLoaiHangHoa    = $item['Mã Loại Hàng Hóa'];
                    $newModel->DonVi            = $item['Đơn Vị'];
                    $newModel->SoLuong          = $item['Số Lượng'];
                    $newModel->GiaMua           = $item['Giá Mua'];
                    $newModel->GiaBan           = $item['Giá Bán'];
                    /**------------- end set data -------------*/

                    $newModel->save();
                }

                return $this->redirect([ $model .'/index']);
            }
        }else {
            return $this->render('error');
        }
    }

    public function actionExport(){

    }
}