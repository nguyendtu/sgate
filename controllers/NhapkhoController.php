<?php

namespace app\controllers;

use app\models\Chitietnhapkho;
use app\models\Hanghoa;
use Yii;
use app\models\Nhapkho;
use app\models\NhapkhoSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NhapkhoController implements the CRUD actions for Nhapkho model.
 */
class NhapkhoController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Nhapkho models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NhapkhoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Nhapkho model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Nhapkho model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Nhapkho();

        $hangHoa = ArrayHelper::map(Hanghoa::find()->all(), 'TenMatHang', 'ID');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $data = explode(',', Yii::$app->request->post('chi-tiet-nhap-kho'));
            $modelChiTietNhapKho = new Chitietnhapkho();

            for($i = 0; $i < count($data);){
                $modelChiTietNhapKho->MaNhapKho = $model->ID;
                if(!empty($data[$i])) {
                    $modelChiTietNhapKho->MaHangHoa = $hangHoa[$data[$i++]];
                    $hh = Hanghoa::find()->where(['id' => $modelChiTietNhapKho->MaHangHoa])->one();
                }
                $modelChiTietNhapKho->SoLuong = $data[$i++];
                $hh->TonKhoHienTai += $modelChiTietNhapKho;
                if(!empty($data[$i])) {
                    $modelChiTietNhapKho->DonGia = $data[$i++];
                }
                if($modelChiTietNhapKho->save()){
                    $hh->save();
                }
                $modelChiTietNhapKho = new Chitietnhapkho();
            }


            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Nhapkho model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $hangHoa = ArrayHelper::map(Hanghoa::find()->all(), 'TenMatHang', 'ID');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $data = explode(',', Yii::$app->request->post('chi-tiet-nhap-kho'));
            $modelChiTietNhapKho = new Chitietnhapkho();
            for($i = 0; $i < count($data);){
                $modelChiTietNhapKho->MaNhapKho = $model->ID;
                if(!empty($data[$i])) {
                    $modelChiTietNhapKho->MaHangHoa = $hangHoa[$data[$i++]];
                    $hh = Hanghoa::find()->where(['id' => $modelChiTietNhapKho->MaHangHoa])->one();
                }
                $modelChiTietNhapKho->SoLuong = $data[$i++];
                $hh->TonKhoHienTai += $modelChiTietNhapKho;
                if(!empty($data[$i])) {
                    $modelChiTietNhapKho->DonGia = $data[$i++];
                }
                if($modelChiTietNhapKho->save()){
                    $hh->save();
                }
                $modelChiTietNhapKho = new Chitietnhapkho();
            }
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Nhapkho model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Nhapkho model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Nhapkho the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Nhapkho::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
