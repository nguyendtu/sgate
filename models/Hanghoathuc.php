<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hanghoathuc".
 *
 * @property integer $ID
 * @property string $TenMatHang
 * @property integer $MaLoaiHangHoa
 * @property integer $DonVi
 * @property integer $SoLuong
 * @property integer $GiaMua
 * @property integer $GiaBan
 */
class Hanghoathuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hanghoathuc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenMatHang', 'MaLoaiHangHoa', 'DonVi', 'SoLuong', 'GiaMua', 'GiaBan'], 'required'],
            [['MaLoaiHangHoa', 'DonVi', 'SoLuong', 'GiaMua', 'GiaBan'], 'integer'],
            [['TenMatHang'], 'string', 'max' => 255]
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
            'SoLuong' => 'So Luong',
            'GiaMua' => 'Gia Mua',
            'GiaBan' => 'Gia Ban',
        ];
    }
}
