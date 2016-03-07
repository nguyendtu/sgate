<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phieumuahang".
 *
 * @property integer $ID
 * @property integer $NhanVienMuaHang
 * @property string $NgayMuaHang
 * @property string $SoHoaDon
 * @property integer $MaNhaCungCap
 * @property integer $TongTienHang
 * @property integer $ThueVAT
 * @property integer $TongTienTT
 * @property integer $CongNo
 * @property string $GhiChu
 */
class Phieumuahang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phieumuahang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NhanVienMuaHang', 'NgayMuaHang', 'SoHoaDon', 'MaNhaCungCap', 'TongTienHang', 'ThueVAT', 'TongTienTT', 'CongNo', 'GhiChu'], 'required'],
            [['NhanVienMuaHang', 'MaNhaCungCap', 'TongTienHang', 'ThueVAT', 'TongTienTT', 'CongNo'], 'integer'],
            [['NgayMuaHang'], 'safe'],
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
            'NhanVienMuaHang' => 'Nhan Vien Mua Hang',
            'NgayMuaHang' => 'Ngay Mua Hang',
            'SoHoaDon' => 'So Hoa Don',
            'MaNhaCungCap' => 'Ma Nha Cung Cap',
            'TongTienHang' => 'Tong Tien Hang',
            'ThueVAT' => 'Thue Vat',
            'TongTienTT' => 'Tong Tien Tt',
            'CongNo' => 'Cong No',
            'GhiChu' => 'Ghi Chu',
        ];
    }
}
