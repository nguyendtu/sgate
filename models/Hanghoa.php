<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hanghoa".
 *
 * @property integer $ID
 * @property string $TenMatHang
 * @property integer $MaLoaiHangHoa
 * @property string $DonVi
 * @property integer $TonKhoDauKy
 * @property integer $TonKhoHienTai
 * @property integer $NamTaiChinh
 * @property string $GhiChu
 */
class Hanghoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hanghoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenMatHang', 'MaLoaiHangHoa', 'TonKhoDauKy', 'TonKhoHienTai', 'NamTaiChinh'], 'required'],
            [['MaLoaiHangHoa', 'TonKhoDauKy', 'TonKhoHienTai', 'NamTaiChinh'], 'integer'],
            [['TenMatHang', 'DonVi'], 'string', 'max' => 255],
            [['GhiChu'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TenMatHang' => 'Ten Mat Hang',
            'MaLoaiHangHoa' => 'Ma Loai Hang Hoa',
            'DonVi' => 'Don Vi',
            'TonKhoDauKy' => 'Ton Kho Dau Ky',
            'TonKhoHienTai' => 'Ton Kho Hien Tai',
            'NamTaiChinh' => 'Nam Tai Chinh',
            'GhiChu' => 'Ghi Chu',
        ];
    }

    public static function yearsDropdown(){
        $curDate = getdate(time());
        $years = [];

        for($i = 0; $i < 10; $i++){
            $years[] = $curDate['year'] - $i;
        }

        return $years;
    }
}
