<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "xuatkho".
 *
 * @property integer $ID
 * @property string $NgayXuat
 * @property string $SoHoaDon
 * @property integer $NguoiBanHang
 * @property integer $MaKhachHang
 * @property integer $TongTienHang
 * @property integer $ThueVAT
 * @property integer $TongTienTT
 * @property string $GhiChu
 */
class Xuatkho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xuatkho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NgayXuat', 'SoHoaDon', 'NguoiBanHang', 'MaKhachHang', 'TongTienHang', 'ThueVAT', 'TongTienTT', 'GhiChu'], 'required'],
            [['NgayXuat'], 'safe'],
            [['NguoiBanHang', 'MaKhachHang', 'TongTienHang', 'ThueVAT', 'TongTienTT'], 'integer'],
            [['SoHoaDon'], 'string', 'max' => 100],
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
            'NgayXuat' => 'Ngay Xuat',
            'SoHoaDon' => 'So Hoa Don',
            'NguoiBanHang' => 'Nguoi Ban Hang',
            'MaKhachHang' => 'Ma Khach Hang',
            'TongTienHang' => 'Tong Tien Hang',
            'ThueVAT' => 'Thue Vat',
            'TongTienTT' => 'Tong Tien Tt',
            'GhiChu' => 'Ghi Chu',
        ];
    }
}
