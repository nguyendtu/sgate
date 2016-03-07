<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Xuatkho;

/**
 * XuatkhoSearch represents the model behind the search form about `app\models\Xuatkho`.
 */
class XuatkhoSearch extends Xuatkho
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'NguoiBanHang', 'MaKhachHang', 'TongTienHang', 'ThueVAT', 'TongTienTT'], 'integer'],
            [['NgayXuat', 'SoHoaDon', 'GhiChu'], 'safe'],
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
        $query = Xuatkho::find();

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
            'NgayXuat' => $this->NgayXuat,
            'NguoiBanHang' => $this->NguoiBanHang,
            'MaKhachHang' => $this->MaKhachHang,
            'TongTienHang' => $this->TongTienHang,
            'ThueVAT' => $this->ThueVAT,
            'TongTienTT' => $this->TongTienTT,
        ]);

        $query->andFilterWhere(['like', 'SoHoaDon', $this->SoHoaDon])
            ->andFilterWhere(['like', 'GhiChu', $this->GhiChu]);

        return $dataProvider;
    }
}
