<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitietnhapkho".
 *
 * @property integer $ID
 * @property integer $MaNhapKho
 * @property integer $MaHangHoa
 * @property integer $SoLuong
 * @property integer $DonGia
 */
class Chitietnhapkho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitietnhapkho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaNhapKho', 'MaHangHoa', 'SoLuong', 'DonGia'], 'required'],
            [['MaNhapKho', 'MaHangHoa', 'SoLuong', 'DonGia'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'MaNhapKho' => 'Ma Nhap Kho',
            'MaHangHoa' => 'Ma Hang Hoa',
            'SoLuong' => 'So Luong',
            'DonGia' => 'Don Gia',
        ];
    }

    public function getNhapkho(){
        return $this->hasOne(Nhapkho::className(), ['ID' => 'MaNhapKho']);
    }

    public function getHanghoa(){
        return $this->hasOne(Hanghoa::className(), ['ID' => 'MaHangHoa']);
    }
}
