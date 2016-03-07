<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nhacungcap".
 *
 * @property integer $ID
 * @property string $NguoiDaiDien
 * @property string $TenCongTy
 * @property string $MaSoThue
 * @property string $DiaChi
 * @property string $Email
 * @property string $Website
 * @property string $DienThoai
 * @property integer $NoHienTai
 */
class Nhacungcap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nhacungcap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NguoiDaiDien', 'TenCongTy', 'MaSoThue', 'DiaChi', 'Email', 'Website', 'DienThoai', 'NoHienTai'], 'required'],
            [['NoHienTai'], 'integer'],
            [['NguoiDaiDien', 'TenCongTy', 'DiaChi'], 'string', 'max' => 255],
            [['MaSoThue'], 'string', 'max' => 30],
            [['Email', 'Website', 'DienThoai'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NguoiDaiDien' => 'Nguoi Dai Dien',
            'TenCongTy' => 'Ten Cong Ty',
            'MaSoThue' => 'Ma So Thue',
            'DiaChi' => 'Dia Chi',
            'Email' => 'Email',
            'Website' => 'Website',
            'DienThoai' => 'Dien Thoai',
            'NoHienTai' => 'No Hien Tai',
        ];
    }
}
