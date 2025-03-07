<?php

namespace backend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\Schools;
use common\models\Scholars;
use common\models\ScholarsSearch;
use yii\web\Controller;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * ScholarsController implements the CRUD actions for Scholars model.
 */
class ScholarsController extends Controller
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
     * Lists all Scholars models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScholarsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$scholarId = Yii::$app->request->post('editableKey');
			$scholar = Scholars::findOne($scholarId);
			// if(Yii::$app->user->can('update-scholar'))
			// {
			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Scholars']);
			$post['Scholars'] = $posted;
			
			if($scholar->load($post))
			{
				$scholar->save();
			}
			echo $out;
			return;
			}
			// else
			// {
				// throw new ForbiddenHttpException;
			// }
			
		// }
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Scholars model.
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
     * Creates a new Scholars model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Scholars();
		
        if ($model->load(Yii::$app->request->post())) {
			$test2 = ArrayHelper::map(Schools::find()->joinWith('scholars')->where(['School_id'=>$model->scholar_school_id])->all(),'School_id','school_area');
			$test = array_values($test2)[0];
			$model->scholar_school_area = $test;
			$model->save();
            return $this->redirect(['view', 'id' => $model->scholar_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Scholars model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
			$test2 = ArrayHelper::map(Schools::find()->joinWith('scholars')->where(['School_id'=>$model->scholar_school_id])->all(),'School_id','school_area');
			$test = array_values($test2)[0];
			$model->scholar_school_area = $test;
			$model->save();
            return $this->redirect(['view', 'id' => $model->scholar_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Scholars model.
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
     * Finds the Scholars model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Scholars the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Scholars::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
