<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Khachhang;

/**
 * KhachhangSearch represents the model behind the search form about `app\models\Khachhang`.
 */
class KhachhangSearch extends Khachhang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'NoHienTai'], 'integer'],
            [['TenCongTy', 'NguoiDaiDien', 'MaSoThue', 'DiaChi', 'DienThoai', 'Email', 'Website'], 'safe'],
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
        $query = Khachhang::find();

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
            'NoHienTai' => $this->NoHienTai,
        ]);

        $query->andFilterWhere(['like', 'TenCongTy', $this->TenCongTy])
            ->andFilterWhere(['like', 'NguoiDaiDien', $this->NguoiDaiDien])
            ->andFilterWhere(['like', 'MaSoThue', $this->MaSoThue])
            ->andFilterWhere(['like', 'DiaChi', $this->DiaChi])
            ->andFilterWhere(['like', 'DienThoai', $this->DienThoai])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Website', $this->Website]);

        return $dataProvider;
    }
}
