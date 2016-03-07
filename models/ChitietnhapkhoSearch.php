<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chitietnhapkho;

/**
 * ChitietnhapkhoSearch represents the model behind the search form about `app\models\Chitietnhapkho`.
 */
class ChitietnhapkhoSearch extends Chitietnhapkho
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'MaNhapKho', 'MaHangHoa', 'SoLuong', 'DonGia'], 'integer'],
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
        $query = Chitietnhapkho::find();

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
            'MaNhapKho' => $this->MaNhapKho,
            'MaHangHoa' => $this->MaHangHoa,
            'SoLuong' => $this->SoLuong,
            'DonGia' => $this->DonGia,
        ]);

        return $dataProvider;
    }
}
