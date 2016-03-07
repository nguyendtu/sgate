<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hanghoathuc;

/**
 * HanghoathucSearch represents the model behind the search form about `app\models\Hanghoathuc`.
 */
class HanghoathucSearch extends Hanghoathuc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'MaLoaiHangHoa', 'DonVi', 'SoLuong', 'GiaMua', 'GiaBan'], 'integer'],
            [['TenMatHang'], 'safe'],
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
        $query = Hanghoathuc::find();

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
            'MaLoaiHangHoa' => $this->MaLoaiHangHoa,
            'DonVi' => $this->DonVi,
            'SoLuong' => $this->SoLuong,
            'GiaMua' => $this->GiaMua,
            'GiaBan' => $this->GiaBan,
        ]);

        $query->andFilterWhere(['like', 'TenMatHang', $this->TenMatHang]);

        return $dataProvider;
    }
}
