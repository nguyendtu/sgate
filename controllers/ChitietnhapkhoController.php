<?php

namespace app\controllers;

use Yii;
use app\models\Chitietnhapkho;
use app\models\ChitietnhapkhoSearch;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChitietnhapkhoController implements the CRUD actions for Chitietnhapkho model.
 */
class ChitietnhapkhoController extends Controller
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
     * Lists all Chitietnhapkho models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChitietnhapkhoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chitietnhapkho model.
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
     * Creates a new Chitietnhapkho model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //$model = new Chitietnhapkho();

        if(Yii::$app->request->isAjax){
            $data = Yii::$app->request->post('data');
            foreach($data as $item){
                if($item[0] != ""){
                    Yii::$app->db->createCommand()->update('chitietnhapkho', [
                        'MaHangHoa' => $item[1],
                        'SoLuong' => $item[2],
                        'DonGIa' => $item[3]], ['ID' => $item[0]])->execute();

                    return Json::encode('update success');
                }else {
                    $model = new Chitietnhapkho();
                    $model->MaNhapKho = 0;
                    $model->MaHangHoa = 1;
                    $model->SoLuong = $item[2];
                    $model->DonGia = $item[3];

                    if($model->save()){
                        return Json::encode($model);
                        //return $model->id;
                    }
                }
            }

            //return Json::encode($model);
        }

        /*if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }*/
    }

    /**
     * Updates an existing Chitietnhapkho model.
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
     * Deletes an existing Chitietnhapkho model.
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
     * Finds the Chitietnhapkho model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chitietnhapkho the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chitietnhapkho::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
