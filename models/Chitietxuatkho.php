<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitietxuatkho".
 *
 * @property integer $ID
 * @property integer $MaXuatKho
 * @property integer $MaHangHoa
 * @property integer $SoLuong
 * @property integer $DonGia
 */
class Chitietxuatkho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitietxuatkho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaXuatKho', 'MaHangHoa', 'SoLuong', 'DonGia'], 'required'],
            [['MaXuatKho', 'MaHangHoa', 'SoLuong', 'DonGia'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'MaXuatKho' => 'Ma Xuat Kho',
            'MaHangHoa' => 'Ma Hang Hoa',
            'SoLuong' => 'So Luong',
            'DonGia' => 'Don Gia',
        ];
    }

    public function getHanghoa(){
        return $this->hasOne(Hanghoa::className(), ['ID' => 'MaHangHoa']);
    }
}
