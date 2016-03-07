<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Phieumuahang;

/**
 * PhieumuahangSearch represents the model behind the search form about `app\models\Phieumuahang`.
 */
class PhieumuahangSearch extends Phieumuahang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'NhanVienMuaHang', 'MaNhaCungCap', 'TongTienHang', 'ThueVAT', 'TongTienTT', 'CongNo'], 'integer'],
            [['NgayMuaHang', 'SoHoaDon', 'GhiChu'], 'safe'],
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
        $query = Phieumuahang::find();

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
            'NhanVienMuaHang' => $this->NhanVienMuaHang,
            'NgayMuaHang' => $this->NgayMuaHang,
            'MaNhaCungCap' => $this->MaNhaCungCap,
            'TongTienHang' => $this->TongTienHang,
            'ThueVAT' => $this->ThueVAT,
            'TongTienTT' => $this->TongTienTT,
            'CongNo' => $this->CongNo,
        ]);

        $query->andFilterWhere(['like', 'SoHoaDon', $this->SoHoaDon])
            ->andFilterWhere(['like', 'GhiChu', $this->GhiChu]);

        return $dataProvider;
    }
}
