<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaihanghoa".
 *
 * @property integer $ID
 * @property integer $TenLoaiHangHoa
 * @property integer $GhiChu
 */
class Loaihanghoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaihanghoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenLoaiHangHoa', 'GhiChu'], 'required'],
            [['TenLoaiHangHoa', 'GhiChu'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TenLoaiHangHoa' => 'Ten Loai Hang Hoa',
            'GhiChu' => 'Ghi Chu',
        ];
    }
}
