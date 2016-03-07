<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nhapkho;

/**
 * NhapkhoSearch represents the model behind the search form about `app\models\Nhapkho`.
 */
class NhapkhoSearch extends Nhapkho
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'NhanVienMuaHang', 'MaNhaCungCap', 'TongTienHang', 'ThueVAT', 'TongTienTT'], 'integer'],
            [['NgayNhap', 'SoHoaDon', 'GhiChu'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Nhapkho::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
            'NgayNhap' => $this->NgayNhap,
            'NhanVienMuaHang' => $this->NhanVienMuaHang,
            'MaNhaCungCap' => $this->MaNhaCungCap,
            'TongTienHang' => $this->TongTienHang,
            'ThueVAT' => $this->ThueVAT,
            'TongTienTT' => $this->TongTienTT,
        ]);

        $query->andFilterWhere(['like', 'SoHoaDon', $this->SoHoaDon])
            ->andFilterWhere(['like', 'GhiChu', $this->GhiChu]);

        return $dataProvider;
    }
}
