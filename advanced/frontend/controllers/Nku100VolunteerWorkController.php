<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
namespace frontend\controllers;

use Yii;
use frontend\models\Nku100VolunteerWork;
use frontend\models\Nku100VolunteerWorkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Nku100VolunteerWorkController implements the CRUD actions for Nku100VolunteerWork model.
 */
class Nku100VolunteerWorkController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Nku100VolunteerWork models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Nku100VolunteerWorkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Nku100VolunteerWork model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    

    /**
     * Finds the Nku100VolunteerWork model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Nku100VolunteerWork the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Nku100VolunteerWork::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
