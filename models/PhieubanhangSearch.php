<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Phieubanhang;

/**
 * PhieubanhangSearch represents the model behind the search form about `app\models\Phieubanhang`.
 */
class PhieubanhangSearch extends Phieubanhang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'NhanVienBanHang', 'MaKhachHang', 'TongTienHang', 'ThueVAT', 'TongTienTT', 'CongNo'], 'integer'],
            [['NgayBanHang', 'SoHoaDon', 'GhiChu'], 'safe'],
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
        $query = Phieubanhang::find();

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
            'NgayBanHang' => $this->NgayBanHang,
            'NhanVienBanHang' => $this->NhanVienBanHang,
            'MaKhachHang' => $this->MaKhachHang,
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
