<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hanghoa;

/**
 * HanghoaSearch represents the model behind the search form about `app\models\Hanghoa`.
 */
class HanghoaSearch extends Hanghoa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'MaLoaiHangHoa', 'TonKhoDauKy', 'TonKhoHienTai', 'NamTaiChinh'], 'integer'],
            [['TenMatHang', 'DonVi', 'GhiChu'], 'safe'],
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
        $query = Hanghoa::find();

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
            'TonKhoDauKy' => $this->TonKhoDauKy,
            'TonKhoHienTai' => $this->TonKhoHienTai,
            'NamTaiChinh' => $this->NamTaiChinh,
        ]);

        $query->andFilterWhere(['like', 'TenMatHang', $this->TenMatHang])
            ->andFilterWhere(['like', 'DonVi', $this->DonVi])
            ->andFilterWhere(['like', 'GhiChu', $this->GhiChu]);

        return $dataProvider;
    }
}
