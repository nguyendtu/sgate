<?php

namespace app\controllers;

use Yii;
use app\models\Hanghoa;
use app\models\HanghoaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HanghoaController implements the CRUD actions for Hanghoa model.
 */
class HanghoaController extends Controller
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
     * Lists all Hanghoa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HanghoaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Hanghoa model.
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
     * Creates a new Hanghoa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hanghoa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Hanghoa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Hanghoa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionThongke()
    {
        $searchModel = new HanghoaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('thongke', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

        //return $this->redirect(['index']);
    }

    public function actionKethang(){
        $model = Hanghoa::find()->where(['NamTaiChinh' => (getDate()['year'] - 1)])->all();

        foreach($model as $hangHoa) {
            $hangHoaMoi = new Hanghoa();
            $hangHoaMoi->TenMatHang = $hangHoa->TenMatHang;
            $hangHoaMoi->MaLoaiHangHoa = $hangHoa->MaLoaiHangHoa;
            $hangHoaMoi->DonVi = $hangHoa->DonVi;
            $hangHoaMoi->TonKhoDauKy = $hangHoa->TonKhoHienTai;
            $hangHoaMoi->TonKhoHienTai = 0;
            $hangHoaMoi->NamTaiChinh = $hangHoa->NamTaiChinh + 1;
            $hangHoaMoi->GhiChu = $hangHoa->GhiChu;

            $hangHoaMoi->save();
        }

        return $this->goHome();
    }

    /**
     * Finds the Hanghoa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hanghoa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hanghoa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
