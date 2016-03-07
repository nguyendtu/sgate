<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nhanvien;

/**
 * NhanvienSearch represents the model behind the search form about `app\models\Nhanvien`.
 */
class NhanvienSearch extends Nhanvien
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['TenNhanVien', 'NgaySinh', 'Email', 'CMND', 'DiaChiThuongTru', 'DiaChiTamTru', 'DienThoai', 'HinhDaiDien'], 'safe'],
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
        $query = Nhanvien::find();

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
            'NgaySinh' => $this->NgaySinh,
        ]);

        $query->andFilterWhere(['like', 'TenNhanVien', $this->TenNhanVien])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'CMND', $this->CMND])
            ->andFilterWhere(['like', 'DiaChiThuongTru', $this->DiaChiThuongTru])
            ->andFilterWhere(['like', 'DiaChiTamTru', $this->DiaChiTamTru])
            ->andFilterWhere(['like', 'DienThoai', $this->DienThoai])
            ->andFilterWhere(['like', 'HinhDaiDien', $this->HinhDaiDien]);

        return $dataProvider;
    }
}
