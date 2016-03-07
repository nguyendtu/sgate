<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nhanvien".
 *
 * @property integer $ID
 * @property string $TenNhanVien
 * @property string $NgaySinh
 * @property string $Email
 * @property string $CMND
 * @property string $DiaChiThuongTru
 * @property string $DiaChiTamTru
 * @property string $DienThoai
 * @property string $HinhDaiDien
 */
class Nhanvien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nhanvien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenNhanVien', 'NgaySinh', 'Email', 'CMND', 'DiaChiThuongTru', 'DiaChiTamTru', 'DienThoai', 'HinhDaiDien'], 'required'],
            [['NgaySinh'], 'safe'],
            [['TenNhanVien'], 'string', 'max' => 100],
            [['Email', 'DiaChiThuongTru', 'DiaChiTamTru', 'HinhDaiDien'], 'string', 'max' => 255],
            [['CMND', 'DienThoai'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TenNhanVien' => 'Ten Nhan Vien',
            'NgaySinh' => 'Ngay Sinh',
            'Email' => 'Email',
            'CMND' => 'Cmnd',
            'DiaChiThuongTru' => 'Dia Chi Thuong Tru',
            'DiaChiTamTru' => 'Dia Chi Tam Tru',
            'DienThoai' => 'Dien Thoai',
            'HinhDaiDien' => 'Hinh Dai Dien',
        ];
    }

    public function getNhapKhos(){
        return $this->hasMany(Nhapkho::className(), ['MaNhanVienMuaHang' => 'id']);
    }
}
