<?php

namespace app\controllers;

use app\models\Emails;
use Yii;



class EmailFormController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $models = Emails::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('index',['models'=>$models]);
    }
    public function actionCreate()
    {
        $model = new Emails();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('create', ['model' => $model]);
    }  
    public function actionView($id){
        $model = Emails::findOne($id);
        return $this->render('view', ['model' => $model]);
    }
    public function actionEdit($id){
        $model = Emails::findOne($id);
        return $this->render('edit', ['model' => $model]);
    }

}
