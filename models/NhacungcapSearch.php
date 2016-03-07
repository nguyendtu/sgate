<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nhacungcap;

/**
 * NhacungcapSearch represents the model behind the search form about `app\models\Nhacungcap`.
 */
class NhacungcapSearch extends Nhacungcap
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'NoHienTai'], 'integer'],
            [['NguoiDaiDien', 'TenCongTy', 'MaSoThue', 'DiaChi', 'Email', 'Website', 'DienThoai'], 'safe'],
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
        $query = Nhacungcap::find();

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

        $query->andFilterWhere(['like', 'NguoiDaiDien', $this->NguoiDaiDien])
            ->andFilterWhere(['like', 'TenCongTy', $this->TenCongTy])
            ->andFilterWhere(['like', 'MaSoThue', $this->MaSoThue])
            ->andFilterWhere(['like', 'DiaChi', $this->DiaChi])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Website', $this->Website])
            ->andFilterWhere(['like', 'DienThoai', $this->DienThoai]);

        return $dataProvider;
    }
}
