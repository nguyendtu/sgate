<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nhapkho".
 *
 * @property integer $ID
 * @property string $NgayNhap
 * @property integer $NhanVienMuaHang
 * @property string $SoHoaDon
 * @property integer $MaNhaCungCap
 * @property integer $TongTienHang
 * @property integer $ThueVAT
 * @property integer $TongTienTT
 * @property string $GhiChu
 */
class Nhapkho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nhapkho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NgayNhap', 'NhanVienMuaHang', 'SoHoaDon', 'MaNhaCungCap', 'TongTienHang', 'ThueVAT', 'TongTienTT', 'GhiChu'], 'required'],
            [['NgayNhap'], 'safe'],
            [['NhanVienMuaHang', 'MaNhaCungCap', 'TongTienHang', 'ThueVAT', 'TongTienTT'], 'integer'],
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
            'NgayNhap' => 'Ngay Nhap',
            'NhanVienMuaHang' => 'Nhan Vien Mua Hang',
            'SoHoaDon' => 'So Hoa Don',
            'MaNhaCungCap' => 'Ma Nha Cung Cap',
            'TongTienHang' => 'Tong Tien Hang',
            'ThueVAT' => 'Thue Vat',
            'TongTienTT' => 'Tong Tien Tt',
            'GhiChu' => 'Ghi Chu',
        ];
    }

    public function getNhanVien(){
        return $this->hasOne(Nhanvien::className(), ['id' => 'NhanVienMuaHang']);
    }
}
