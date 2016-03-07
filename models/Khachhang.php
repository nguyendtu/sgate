<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $ID
 * @property string $TenCongTy
 * @property string $NguoiDaiDien
 * @property string $MaSoThue
 * @property string $DiaChi
 * @property string $DienThoai
 * @property string $Email
 * @property string $Website
 * @property integer $NoHienTai
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenCongTy', 'NguoiDaiDien', 'MaSoThue', 'DiaChi', 'DienThoai', 'Email', 'Website'], 'required'],
            [['NoHienTai'], 'integer'],
            [['TenCongTy', 'DiaChi', 'Email', 'Website'], 'string', 'max' => 255],
            [['NguoiDaiDien', 'MaSoThue', 'DienThoai'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TenCongTy' => 'Ten Cong Ty',
            'NguoiDaiDien' => 'Nguoi Dai Dien',
            'MaSoThue' => 'Ma So Thue',
            'DiaChi' => 'Dia Chi',
            'DienThoai' => 'Dien Thoai',
            'Email' => 'Email',
            'Website' => 'Website',
            'NoHienTai' => 'No Hien Tai',
        ];
    }
}
