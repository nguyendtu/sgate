<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phieubanhang".
 *
 * @property integer $ID
 * @property string $NgayBanHang
 * @property integer $NhanVienBanHang
 * @property integer $MaKhachHang
 * @property string $SoHoaDon
 * @property integer $TongTienHang
 * @property integer $ThueVAT
 * @property integer $TongTienTT
 * @property integer $CongNo
 * @property string $GhiChu
 */
class Phieubanhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phieubanhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NgayBanHang', 'NhanVienBanHang', 'MaKhachHang', 'TongTienHang', 'ThueVAT', 'TongTienTT', 'CongNo', 'GhiChu'], 'required'],
            [['NgayBanHang'], 'safe'],
            [['NhanVienBanHang', 'MaKhachHang', 'TongTienHang', 'ThueVAT', 'TongTienTT', 'CongNo'], 'integer'],
            [['SoHoaDon'], 'string', 'max' => 255],
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
            'NgayBanHang' => 'Ngay Ban Hang',
            'NhanVienBanHang' => 'Nhan Vien Ban Hang',
            'MaKhachHang' => 'Ma Khach Hang',
            'SoHoaDon' => 'So Hoa Don',
            'TongTienHang' => 'Tong Tien Hang',
            'ThueVAT' => 'Thue Vat',
            'TongTienTT' => 'Tong Tien Tt',
            'CongNo' => 'Cong No',
            'GhiChu' => 'Ghi Chu',
        ];
    }
}
