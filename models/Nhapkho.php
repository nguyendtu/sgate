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
            //[['NgayNhap'], 'safe'],
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
            'NgayNhap' => 'Ngày Nhập',
            'NhanVienMuaHang' => 'Nhân Viên Mua Hàng',
            'SoHoaDon' => 'Số Hóa Đơn',
            'MaNhaCungCap' => 'Mã Nhà Cung Cấp',
            'TongTienHang' => 'Tổng Tiền Hàng',
            'ThueVAT' => 'Thuế VAT',
            'TongTienTT' => 'Tổng Tiền TT',
            'GhiChu' => 'Ghi Chú',
        ];
    }

    public function getNhanvien(){
        return $this->hasOne(Nhanvien::className(), ['ID' => 'NhanVienMuaHang']);
    }

    public function getNhacungcap(){
        return $this->hasOne(Nhacungcap::className(), ['ID' => 'MaNhaCungCap']);
    }

    public function getChitietnhapkhos(){
        return $this->hasMany(Chitietnhapkho::className(), ['MaNhapKho' => 'ID']);
    }
}
